<?php

/**
 * @file
 * Contains Drupal\mimodulo\MiEntidadInterface.
 */

namespace Drupal\mimodulo;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a MiEntidad entity.
 * @ingroup account
 */
interface MiEntidadInterface extends ContentEntityInterface, EntityOwnerInterface
{

  // Add get/set methods for your configuration properties here.
}
