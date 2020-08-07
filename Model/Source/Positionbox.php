<?php
namespace MagePrakash\CookieLaw\Model\Source;

class Positionbox implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        $options = [
            [
                'label' => __('Top Left'),
                'value' => 'top-left',
            ],
            [
                'label' => __('Top right'),
                'value' => 'top-right',
            ],
            [
                'label' => __('Bottom left'),
                'value' => 'bottom-left',
            ],
            [
                'label' => __('Bottom right'),
                'value' => 'bottom-right',
            ],
        ];
        return $options;
    }
}