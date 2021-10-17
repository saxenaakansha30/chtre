<?php

declare(strict_types=1);

namespace Drupal\chtre\Controller;

/**
 * Provides a page to show the usage of Rendered Elements of this module.
 */
class TagsUsageExample {

  public function content() {
    $build = [];

    $build['Heading'] = [
      '#plain_text' => 'Lists the usage of Render Elements provided by CHTRE',
    ];

    $build['meter'] = [
      '#type' => 'meter',
      '#label_content' => 'Disc Space Left:',
      '#content' => '60',
      '#attributes' => [
        'id' => 'id_abc',
        'min' => '0',
        'max' => '100',
        'value' => '85',
        'low' => '30',
        'high' => '100',
        'optimum' => '100',
      ],
    ];

    $build['progress_example'] = [
      '#type' => 'progress',
      '#content' => '60%',
      '#attributes' => [
        'id' => 'id_progress',
        'max' => 1000,
        'value' => 600,
      ],
    ];

    return $build;
  }

}
