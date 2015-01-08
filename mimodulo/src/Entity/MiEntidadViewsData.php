<?php

/**
 * @file
 * Contains Drupal\mimodulo\Entity\MiEntidad.
 */

namespace Drupal\mimodulo\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides the views data for the MiEntidad entity type.
 */
class MiEntidadViewsData extends EntityViewsData implements EntityViewsDataInterface
{

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['mi_entidad']['table']['base'] = array(
      'field' => 'id',
      'title' => t('MiEntidad'),
      'help' => t('The mi_entidad entity ID.'),
    );

    return $data;
  }


}
