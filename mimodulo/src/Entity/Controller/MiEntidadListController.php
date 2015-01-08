<?php

/**
 * @file
 * Contains Drupal\mimodulo\Entity\Controller\MiEntidadListController.
 */

namespace Drupal\mimodulo\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for MiEntidad entity.
 *
 * @ingroup mimodulo
 */
class MiEntidadListController extends EntityListBuilder
{

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = t('MiEntidadID');
    $header['name'] = t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\mimodulo\Entity\MiEntidad */
    $row['id'] = $entity->id();
    $row['name'] = \Drupal::l(
        $this->getLabel($entity),
        new Url(
          'entity.mi_entidad.edit_form', array(
            'mi_entidad' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }
}
