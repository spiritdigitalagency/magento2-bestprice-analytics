<?php

namespace Spirit\BestpriceAnalytics\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class BadgePosition implements OptionSourceInterface
{
    
    /**
     * @return array[]
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => '',
                'label' => 'Auto'
            ],
            [
                'value' => 'left',
                'label' => 'Left'
            ],
            [
                'value' => 'center',
                'label' => 'Center'
            ],
            [
                'value' => 'right',
                'label' => 'Right'
            ]
        ];
    }
}
