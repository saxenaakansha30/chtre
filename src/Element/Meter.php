<?php

declare(strict_types=1);

namespace Drupal\chtre\Element;

use Drupal\Core\Render\Element\RenderElement;

/**
 * Provides render element for meter html tag.
 *
 * The <meter> tag defines a scalar measurement within a known range,
 * or a fractional value. This is also known as a gauge.
 * Examples: Disk usage, the relevance of a query result, etc.
 *
 * Note: The meter tag is not supported in Edge 12 (or earlier).
 *
 * View an example of this element in use in
 * \Drupal\chtre\Controller\TagsUsageExample::content().
 *
 * @RenderElement("meter")
 */
class Meter extends RenderElement {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    return [
      '#theme' => 'chtre_meter',
      '#label_content' => '',
      '#content' => '',
      '#value' => '',
      '#attributes' => [
        'id' => '',
        'min' => '0',
        'max' => '1',
        'value' => '0.1',
        'low' => '0.3',
        'high' => '1',
        'optimum' => '0.5',
      ],
    ];
  }

}
