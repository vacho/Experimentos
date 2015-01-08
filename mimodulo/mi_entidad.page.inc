<?php

/**
 * @file
 * Contains mi_entidad.page.inc
 * MiEntidad page callback file for the mi_entidad entity.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for mi_entidad templates.
 *
 * Default template: mi_entidad.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */

function template_preprocess_mi_entidad(&$variables) {
  // Fetch MiEntidad Entity Object
  $mi_entidad = $variables['elements']['#mi_entidad'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
