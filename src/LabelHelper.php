<?php

namespace Drupal\address_extend_example;

use Drupal\address\LabelHelper as LabelHelperBase;
use Drupal\address_extend_example\AddressFormat;
use Drupal\address_extend_example\AddressField;

/**
 * Provides translated labels for the library enums.
 */
class LabelHelper extends LabelHelperBase {

  /**
   * {@inheritdoc}
   */
  public static function getGenericFieldLabels() {
    $labels = parent::getGenericFieldLabels();
    $labels[AddressField::ADDRESSEE] = t('Addressee', [], ['context' => 'Address label']);
    $labels[AddressField::LOCATION_NAME] = t('Location name', [], ['context' => 'Address label']);
    return $labels;
  }

  /**
   * {@inheritdoc}
   */
  public static function getFieldLabels(AddressFormat $address_format) {
    $labels = parent::getFieldLabels($address_format);
    $labels[AddressField::ADDRESSEE] = t('Addressee', [], ['context' => 'Address label']);
    $labels[AddressField::LOCATION_NAME] = t('Location name', [], ['context' => 'Address label']);
    return $labels;
  }

}
