<?php
/**
 * @category   MagePrakash CookieLaw
 * @package    MagePrakash_CookieLaw
 * @copyright  Copyright (c) 2017 MagePrakash
 * @author     MagePrakash Team <support@MagePrakash.com>
 */
namespace MagePrakash\CookieLaw\Model\Source;

class Content implements \Magento\Framework\Option\ArrayInterface
{
 public function toOptionArray()
 {
	 $options = [
		 [
			 'label' => __('Default Text'),
			 'value' => 'default',
		 ],
		 [
			 'label' => __('Custom Text'),
			 'value' => 'custom',
		 ],
	 ];
	 return $options;
	 }
}