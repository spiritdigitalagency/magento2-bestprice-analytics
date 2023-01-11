<?php

namespace Spirit\BestpriceAnalytics\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\ScopeInterface;

class Config implements ArgumentInterface
{
    const CONFIG_NAMESPACE = 'spirit_bestprice';
    
    /**
     * @var ScopeConfigInterface
     */
    protected $_scopeConfig;
    
    /**
     * Config constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
    }
    
    /**
     * @return boolean
     */
    public function getIsActive(): bool
    {
        return $this->getConfig('analytics/status') ?? false;
    }
    
    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getConfig(string $key)
    {
        return $this->_scopeConfig->getValue(
            self::CONFIG_NAMESPACE . "/$key",
            ScopeInterface::SCOPE_STORE
        );
    }
    
    /**
     * @return string
     */
    public function get360Key(): string
    {
        return $this->getConfig('analytics/360_key') ?? '';
    }
    
    /**
     * @return string
     */
    public function getUniqueId(): string
    {
        return $this->getConfig('analytics/unique_id') ?? 'entity_id';
    }
    
    /**
     * @return bool
     */
    public function getVariationUniqueId(): bool
    {
        return $this->getConfig('analytics/variation_unique_id') ?? true;
    }
    
    /**
     * @return string
     */
    public function getBadgeActive(): string
    {
        return $this->getConfig('badge/status') ?? '';
    }

    /**
     * @return string
     */
    public function getBadgePosition(): string
    {
        if ($this->getConfig('badge/position')) {
            return $this->getConfig('badge/position');
        }

        return '';
    }

    /**
     * @return string
     */
    public function getIsProductBadgeActive(): string
    {
        return $this->getConfig('product_badge/status') ?? '';
    }

    /**
     * @return string
     */
    public function getIsWidgetActive(): string
    {
        return $this->getConfig('widget/status') ?? '';
    }
}
