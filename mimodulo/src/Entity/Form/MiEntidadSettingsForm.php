<?php

/**
 * @file
 * Contains Drupal\mimodulo\Entity\Form\MiEntidadSettingsForm.
 */

namespace Drupal\mimodulo\Entity\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class MiEntidadSettingsForm.
 * @package Drupal\mimodulo\Form
 * @ingroup mimodulo
 */
class MiEntidadSettingsForm extends FormBase
{

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'MiEntidad_settings';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param array $form_state
   *   An associative array containing the current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }


  /**
   * Define the form used for MiEntidad  settings.
   * @return array
   *   Form definition array.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param array $form_state
   *   An associative array containing the current state of the form.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['MiEntidad_settings']['#markup'] = 'Settings form for MiEntidad. Manage field settings here.';
    return $form;
  }
}
