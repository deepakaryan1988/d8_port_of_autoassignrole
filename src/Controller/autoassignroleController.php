<?php
/**
 * @file
 * Contains \Drupal\node\Controller\NodeController.
 */

namespace Drupal\autoassignrole\Controller;

use Drupal;
use Drupal\Component\Utility\String;
use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Datetime\DateFormatter;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Url;
use Drupal\node\NodeTypeInterface;
use Drupal\node\NodeInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for Node routes.
 */
class autoassignroleController extends ControllerBase {
  /**
   * Constructs a NodeController object.
   *
   * @param \Drupal\Core\Datetime\DateFormatter $date_formatter
   *   The date formatter service.
   * @param \Drupal\Core\Render\RendererInterface $renderer
   *   The renderer service.
   */
  public function __construct() {
    $this->database = Drupal::database();
  }

  function autoassignrole_admin_block_page() {
    return array('deepak');
  }

}
