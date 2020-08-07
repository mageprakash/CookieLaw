<?php
/**
 * @category   MagePrakash CookieLaw
 * @package    MagePrakash_CookieLaw
 * @copyright  Copyright (c) 2017 MagePrakash
 * @author     MagePrakash Team <support@MagePrakash.com>
 */
namespace MagePrakash\CookieLaw\Model\Source;

class Notice implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        $options = [
            [
                'label' => __('Never show again'),
                'value' => 365,
            ],
            [
                'label' => __('Hide for the rest of the day'),
                'value' => 1,
            ],
            [
                'label' => __('Hide for the rest of the session'),
                'value' => 0,
            ],
        ];
        return $options;
    }
}