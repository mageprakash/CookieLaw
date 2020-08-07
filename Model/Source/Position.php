<?php
/**
 * @category   MagePrakash CookieLaw
 * @package    MagePrakash_CookieLaw
 * @copyright  Copyright (c) 2017 MagePrakash
 * @author     MagePrakash Team <support@MagePrakash.com>
 */
namespace MagePrakash\CookieLaw\Model\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{
 public function toOptionArray()
 {
	 $options = [
		 [
			 'label' => __('Top'),
			 'value' => 'top',
		 ],
		 [
			 'label' => __('Bottom'),
			 'value' => 'bottom',
		 ],
	 ];
	 return $options;
	 }
}