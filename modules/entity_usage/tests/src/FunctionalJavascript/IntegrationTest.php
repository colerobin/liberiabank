<?php

namespace Drupal\Tests\entity_usage\FunctionalJavascript;

use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\link\LinkItemInterface;
use Drupal\Tests\entity_usage\Traits\EntityUsageLastEntityQueryTrait;

/**
 * Basic functional tests for the usage tracking.
 *
 * This will also implicitly test the Entity Reference and Link plugins.
 *
 * @package Drupal\Tests\entity_usage\FunctionalJavascript
 *
 * @group entity_usage
 */
class IntegrationTest extends EntityUsageJavascriptTestBase {

  use EntityUsageLastEntityQueryTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'link',
  ];

  /**
   * Tests the tracking of nodes in some simple CRUD operations.
   */
  public function testCrudTracking() {
    $session = $this->getSession();
    $page = $session->getPage();
    $assert_session = $this->assertSession();

    /** @var \Drupal\entity_usage\EntityUsage $usage_service */
    $usage_service = \Drupal::service('entity_usage.usage');

    // Create node 1.
    $this->drupalGet('/node/add/eu_test_ct');
    $page->fillField('title[0][value]', 'Node 1');
    $page->pressButton('Save');
    $session->wait(500);
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 1 has been created.');
    $node1 = $this->getLastEntityOfType('node', TRUE);

    // Nobody is using this guy for now.
    $usage = $usage_service->listSources($node1);
    $this->assertEquals([], $usage);

    // Create node 2 referencing node 1 using reference field.
    $this->drupalGet('/node/add/eu_test_ct');
    $page->fillField('title[0][value]', 'Node 2');
    $page->fillField('field_eu_test_related_nodes[0][target_id]', "Node 1 ({$node1->id()})");
    $page->pressButton('Save');
    $session->wait(500);
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 2 has been created.');
    $node2 = $this->getLastEntityOfType('node', TRUE);
    // Check that we correctly registered the relation between N2 and N1.
    $usage = $usage_service->listSources($node1);
    $expected = [
      'node' => [
        $node2->id() => [
          [
            'source_langcode' => $node2->language()->getId(),
            'source_vid' => $node2->getRevisionId(),
            'method' => 'entity_reference',
            'field_name' => 'field_eu_test_related_nodes',
            'count' => 1,
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);

    // Create a new entity reference field.
    $storage = FieldStorageConfig::create([
      'field_name' => 'field_eu_test_related_nodes2',
      'entity_type' => 'node',
      'type' => 'entity_reference',
      'settings' => [
        'target_type' => 'node',
      ],
    ]);
    $storage->save();
    FieldConfig::create([
      'bundle' => 'eu_test_ct',
      'entity_type' => 'node',
      'field_name' => 'field_eu_test_related_nodes2',
      'label' => 'Related Nodes 2',
      'settings' => [
        'handler' => 'default:node',
        'handler_settings' => [
          'target_bundles' => ['eu_test_ct'],
          'auto_create' => FALSE,
        ],
      ],
    ])->save();
    // Define our widget and formatter for this field.
    entity_get_form_display('node', 'eu_test_ct', 'default')
      ->setComponent('field_eu_test_related_nodes2', [
        'type' => 'entity_reference_autocomplete',
      ])
      ->save();
    entity_get_display('node', 'eu_test_ct', 'default')
      ->setComponent('field_eu_test_related_nodes2', [
        'type' => 'entity_reference_label',
      ])
      ->save();

    // Create Node 3 referencing N2 and N1 one in each field.
    $this->drupalGet('/node/add/eu_test_ct');
    $page->fillField('title[0][value]', 'Node 3');
    $page->fillField('field_eu_test_related_nodes[0][target_id]', "Node 1 ({$node1->id()})");
    $page->fillField('field_eu_test_related_nodes2[0][target_id]', "Node 2 ({$node2->id()})");
    $page->pressButton('Save');
    $session->wait(500);
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 3 has been created.');
    $node3 = $this->getLastEntityOfType('node', TRUE);
    // Check that both of these relationships are tracked.
    $usage = $usage_service->listTargets($node3);
    $expected = [
      'node' => [
        $node1->id() => [
          [
            'method' => 'entity_reference',
            'field_name' => 'field_eu_test_related_nodes',
            'count' => 1,
          ],
        ],
        $node2->id() => [
          [
            'method' => 'entity_reference',
            'field_name' => 'field_eu_test_related_nodes2',
            'count' => 1,
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);
    // If we delete the field storage the usage should update accordingly.
    $storage->delete();
    $usage = $usage_service->listTargets($node3);
    $expected = [
      'node' => [
        $node1->id() => [
          [
            'method' => 'entity_reference',
            'field_name' => 'field_eu_test_related_nodes',
            'count' => 1,
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);

    // Edit Node 3, remove the reference to Node 1, check we update usage.
    $this->drupalGet("/node/{$node3->id()}/edit");
    $page->fillField('field_eu_test_related_nodes[0][target_id]', '');
    $page->pressButton('Save');
    $session->wait(500);
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 3 has been updated');
    // Node 3 isn't referencing any content now.
    $usage = $usage_service->listTargets($node3);
    $this->assertEquals([], $usage);
    // Node 2 isn't referenced by any content now.
    $usage = $usage_service->listSources($node2);
    $this->assertEquals([], $usage);

    // Create node 4 referencing N2 and N3 on the same field.
    $this->drupalGet('/node/add/eu_test_ct');
    $page->fillField('title[0][value]', 'Node 4');
    $page->fillField('field_eu_test_related_nodes[0][target_id]', "Node 2 ({$node2->id()})");
    $add_another_button = $assert_session->elementExists('css', 'input[name="field_eu_test_related_nodes_add_more"]');
    $add_another_button->press();
    $new_input = $assert_session->waitForField('field_eu_test_related_nodes[1][target_id]');
    $this->assertNotNull($new_input);
    $new_input->setValue("Node 3 ({$node3->id()})");
    $page->pressButton('Save');
    $session->wait(500);
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 4 has been created.');
    $node4 = $this->getLastEntityOfType('node', TRUE);
    // Check that both of these relationships are tracked.
    $usage = $usage_service->listTargets($node4);
    $expected = [
      'node' => [
        $node2->id() => [
          [
            'method' => 'entity_reference',
            'field_name' => 'field_eu_test_related_nodes',
            'count' => 1,
          ],
        ],
        $node3->id() => [
          [
            'method' => 'entity_reference',
            'field_name' => 'field_eu_test_related_nodes',
            'count' => 1,
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);

    // Deleting one of the targets updates the info accordingly.
    $node2->delete();
    $usage = $usage_service->listTargets($node4);
    $expected = [
      'node' => [
        $node3->id() => [
          [
            'method' => 'entity_reference',
            'field_name' => 'field_eu_test_related_nodes',
            'count' => 1,
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);

    // Adding the same node twice on the same field counts as 1 usage.
    $this->drupalGet("/node/{$node4->id()}/edit");
    $page->fillField('field_eu_test_related_nodes[0][target_id]', "Node 3 ({$node3->id()})");
    $page->fillField('field_eu_test_related_nodes[1][target_id]', "Node 3 ({$node3->id()})");
    $page->pressButton('Save');
    $session->wait(500);
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 4 has been updated');
    // There should be only one usage record from source N4 -> target N3:
    $usage = $usage_service->listTargets($node4);
    $expected = [
      'node' => [
        $node3->id() => [
          [
            'method' => 'entity_reference',
            'field_name' => 'field_eu_test_related_nodes',
            'count' => 1,
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);
    // There should be only one record the other way around.
    $usage = $usage_service->listSources($node3);
    $expected = [
      'node' => [
        $node4->id() => [
          [
            'source_langcode' => $node4->language()->getId(),
            'source_vid' => $node4->getRevisionId(),
            'method' => 'entity_reference',
            'field_name' => 'field_eu_test_related_nodes',
            'count' => 1,
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);

    // Deleting the source node should make the usage disappear.
    $node4->delete();
    $usage = $usage_service->listSources($node3);
    $this->assertEquals([], $usage);
  }

  /**
   * Tests the tracking of nodes in link fields.
   */
  public function testLinkTracking() {
    $session = $this->getSession();
    $page = $session->getPage();
    $assert_session = $this->assertSession();

    /** @var \Drupal\entity_usage\EntityUsage $usage_service */
    $usage_service = \Drupal::service('entity_usage.usage');

    // Add a link field to our test content type.
    $field_storage = FieldStorageConfig::create([
      'field_name' => 'field_link1',
      'entity_type' => 'node',
      'type' => 'link',
      'cardinality' => FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED,
      'settings' => [],
    ]);
    $field_storage->save();
    $field = FieldConfig::create([
      'field_storage' => $field_storage,
      'bundle' => 'eu_test_ct',
      'settings' => [
        'title' => DRUPAL_OPTIONAL,
        'link_type' => LinkItemInterface::LINK_GENERIC,
      ],
    ]);
    $field->save();
    entity_get_form_display('node', 'eu_test_ct', 'default')
      ->setComponent('field_link1', ['type' => 'link_default'])
      ->save();

    entity_get_display('node', 'eu_test_ct', 'default')
      ->setComponent('field_link1', ['type' => 'link'])
      ->save();

    // Create Node 1.
    $this->drupalGet('/node/add/eu_test_ct');
    $page->fillField('title[0][value]', 'Node 1');
    $page->pressButton('Save');
    $session->wait(500);
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 1 has been created.');
    /** @var \Drupal\node\NodeInterface $node1 */
    $node1 = $this->getLastEntityOfType('node', TRUE);

    // Create Node 2, referencing Node 1.
    $this->drupalGet('/node/add/eu_test_ct');
    $page->fillField('title[0][value]', 'Node 2');
    $page->fillField('field_link1[0][uri]', "Node 1 ({$node1->id()})");
    $page->fillField('field_link1[0][title]', "Linked text");
    $page->pressButton('Save');
    $session->wait(500);
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 2 has been created.');
    $node2 = $this->getLastEntityOfType('node', TRUE);
    // Check that the usage of Node 1 points to Node 2.
    $usage = $usage_service->listSources($node1);
    $expected = [
      'node' => [
        $node2->id() => [
          0 => [
            'source_langcode' => 'en',
            'source_vid' => $node2->getRevisionId(),
            'method' => 'link',
            'field_name' => 'field_link1',
            'count' => 1,
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);

    // Edit Node 2, remove reference.
    $this->drupalGet("/node/{$node2->id()}/edit");
    $page->fillField('field_link1[0][uri]', '');
    $page->fillField('field_link1[0][title]', '');
    $page->pressButton('Save');
    $session->wait(500);
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 2 has been updated.');
    // Verify the usage was released.
    $usage = $usage_service->listSources($node1);
    $this->assertEquals([], $usage);

    // Reference Node 1 again, now using the node path instead of label.
    $this->drupalGet("/node/{$node2->id()}/edit");
    $page->fillField('field_link1[0][uri]', "entity:node/{$node1->id()}");
    $page->fillField('field_link1[0][title]', "Linked text");
    $page->pressButton('Save');
    $this->saveHtmlOutput();
    $assert_session->pageTextContains('eu_test_ct Node 2 has been updated.');
    // Usage now should be there.
    $usage = $usage_service->listSources($node1);
    $expected = [
      'node' => [
        $node2->id() => [
          0 => [
            'source_langcode' => 'en',
            'source_vid' => $node2->getRevisionId(),
            'method' => 'link',
            'field_name' => 'field_link1',
            'count' => 1,
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);
    // Delete the source and usage should be released.
    $node2->delete();
    $usage = $usage_service->listSources($node1);
    $this->assertEquals([], $usage);
  }

}
