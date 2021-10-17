<?php

declare(strict_types=1);

namespace Drupal\chtre\Element;

use Drupal\Core\Render\Element\RenderElement;

/**
 * Provides render element for pogress html tag.
 *
 * The <progress> tag represents the completion progress of a task.
 *
 * Note: The <progress> tag is not suitable for representing a gauge
 * (e.g. disk space usage or relevance of a query result).
 * To represent a gauge, use the <meter> tag instead.
 *
  * View an example of this element in use in
 * \Drupal\chtre\Controller\TagsUsageExample::content().
 *
 * @RenderElement("progress")
 */
class Progress extends RenderElement {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    return [
      '#theme' => 'chtre_progress',
      '#content' => '',
      '#attributes' => [
        'id' => '',
        'max' => '1',
        'value' => '0.1',
      ],
    ];
  }

}
