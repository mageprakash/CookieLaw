<?php
/**
 * @category   MagePrakash CookieLaw
 * @package    MagePrakash_CookieLaw
 * @copyright  Copyright (c) 2017 MagePrakash
 * @author     MagePrakash Team <support@MagePrakash.com>
 */
namespace MagePrakash\CookieLaw\Block\Cookie;

class Cookie extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \MagePrakash\CookieLaw\Helper\Data
     */
    protected $_helper;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    public $_storeManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MagePrakash\CookieLaw\Helper\Data $helper
    ) {
        $this->_helper = $helper;
        $this->_storeManager = $context->getStoreManager();
        parent::__construct($context);
    }

    /**
     * @return string
     */
    public function getConfig($path) {
         return $this->_helper->getModuleConfig($path,$this->_storeManager->getStore()->getStoreId());
    }

    /**
     * @return string
     */
    public function getMoreInfoPageUrl($cmspage) {
        return $this->_storeManager->getStore()->getUrl($cmspage);

    }
}
