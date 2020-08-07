<?php
namespace MagePrakash\CookieLaw\Model\Source;

class Style implements \Magento\Framework\Option\ArrayInterface
{
 public function toOptionArray()
 {
	 $options = [
		 [
			 'label' => __('Bar'),
			 'value' => 'bar',
		 ],
		 [
			 'label' => __('Box'),
			 'value' => 'box',
		 ],
	 ];
	 return $options;
	 }
}