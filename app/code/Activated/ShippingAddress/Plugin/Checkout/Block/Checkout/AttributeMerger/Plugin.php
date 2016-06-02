<?php
namespace Activated\ShippingAddress\Plugin\Checkout\Block\Checkout\AttributeMerger;

class Plugin
{
  public function afterMerge(\Magento\Checkout\Block\Checkout\AttributeMerger $subject, $result)
  {
    if (array_key_exists('street', $result)) {
      $result['street']['children'][0]['label'] = __('Street Address');
      $result['street']['children'][1]['label'] = __('Apt, suite, building');
    }

    return $result;
  }
}
