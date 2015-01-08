<?php

/**
 * @file
 * Contains Drupal\account\MiEntidadAccessController.
 */

namespace Drupal\mimodulo;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the MiEntidad entity.
 *
 * @see \Drupal\mimodulo\Entity\MiEntidad.
 */
class MiEntidadAccessControlHandler extends EntityAccessControlHandler
{

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, $langcode, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view MiEntidad entity');
        break;

      case 'edit':
        return AccessResult::allowedIfHasPermission($account, 'edit MiEntidad entity');
        break;

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete MiEntidad entity');
        break;

    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add Bar entity');
  }
}
