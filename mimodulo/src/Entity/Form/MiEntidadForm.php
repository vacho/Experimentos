<?php

/**
 * @file
 * Contains Drupal\mimodulo\Entity\Form\MiEntidadForm.
 */

namespace Drupal\mimodulo\Entity\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Language\Language;

/**
 * Form controller for the MiEntidad entity edit forms.
 *
 * @ingroup mimodulo
 */
class MiEntidadForm extends ContentEntityForm
{

  /**
   * Overrides Drupal\Core\Entity\EntityFormController::buildForm().
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\mimodulo\Entity\MiEntidad */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    $form['langcode'] = array(
      '#title' => t('Language'),
      '#type' => 'language_select',
      '#default_value' => $entity->getUntranslated()->language()->getId(),
      '#languages' => Language::STATE_ALL,
    );

    return $form;
  }

  /**
   * Overrides \Drupal\Core\Entity\EntityFormController::submit().
   */
  public function submit(array $form, FormStateInterface $form_state) {
    // Build the entity object from the submitted values.
    $entity = parent::submit($form, $form_state);

    return $entity;
  }

  /**
   * Overrides Drupal\Core\Entity\EntityFormController::save().
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $status = $entity->save();

    if ($status) {
      drupal_set_message($this->t('Saved the %label MiEntidad.', array(
        '%label' => $entity->label(),
      )));
    }
    else {
      drupal_set_message($this->t('The %label MiEntidad was not saved.', array(
        '%label' => $entity->label(),
      )));
    }
    $form_state->setRedirect('entity.mi_entidad.edit_form', ['mi_entidad' => $entity->id()]);
  }
}
