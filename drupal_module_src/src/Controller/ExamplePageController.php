<?php

namespace Drupal\symbioquine_dot_net_built_drupal_module_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines ExamplePageController class.
 */
class ExamplePageController extends ControllerBase {

  /**
   * Constructs a new ExamplePageController object.
   *
   */
  public function __construct() {
  }

  /**
   * Top-level handler for demo page requests.
   */
  public function content() {
    return [
      'app' => [
        '#markup' => '<div id="example-page-app"></div>',
        '#attached' => [
          'library' => [
            'symbioquine_dot_net_built_drupal_module_example/built_drupal_module_example'
          ],
        ],
      ],
    ];
  }

}

