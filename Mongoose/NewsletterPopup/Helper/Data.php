<?php
namespace Mongoose\NewsletterPopup\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

    const XML_PATH_ENABLE = 'newsletter_popup/general/enable';
    const XML_PATH_POPUP_DELAY = 'newsletter_popup/general/newsletter_popup_delay';
    const XML_PATH_POPUP_TITLE = 'newsletter_popup/general/newsletter_popup_title';
    const XML_PATH_POPUP_TEXT = 'newsletter_popup/general/newsletter_popup_text';
    const XML_PATH_BUTTON_TEXT = 'newsletter_popup/general/newsletter_popup_button_text';
    const XML_PATH_BUTTON_COLOR = 'newsletter_popup/general/newsletter_popup_button_color';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getEnable($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_ENABLE, $storeId);
    }

    public function getPopupDelay($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_POPUP_DELAY, $storeId);
    }

    public function getTitle($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_POPUP_TITLE, $storeId);
    }

    public function getPopupText($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_POPUP_TEXT, $storeId);
    }

    public function getButtonText($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_BUTTON_TEXT, $storeId);
    }

    public function getButtonColor($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_BUTTON_COLOR, $storeId);
    }
}
