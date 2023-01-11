<?php

namespace Spirit\BestpriceAnalytics\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class ProductWidget extends Template implements BlockInterface
{
    
    /**
     * @var string
     */
    protected $_template = "widget/product-widget.phtml";
    
    /**
     * @var \Spirit\BestpriceAnalytics\ViewModel\Config
     */
    protected $_helper;
    
    /**
     * Badge constructor.
     *
     * @param \Spirit\BestpriceAnalytics\ViewModel\Config $helper
     * @param Template\Context $context
     */
    public function __construct(
        \Spirit\BestpriceAnalytics\ViewModel\Config $helper,
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        $this->_helper = $helper;
        
        parent::__construct($context);
    }
    
    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->_helper->getIsActive() && $this->_helper->getIsWidgetActive();
    }
}
