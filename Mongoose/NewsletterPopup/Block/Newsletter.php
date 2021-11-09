<?php
namespace Mongoose\NewsletterPopup\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Mongoose\NewsletterPopup\Helper\Data;

class Newsletter extends Template
{

    protected $helperData;

    public function __construct(
        Context $context,
        Data $helperData,
        array $data = []
    ) {
        $this->helperData = $helperData;
        parent::__construct($context, $data);
    }

    public function isEnable()
    {
        return $this->helperData->getEnable();
    }

    public function getDelay()
    {
        return $this->helperData->getPopupDelay() * 1000;
    }

    public function getTitle()
    {
        return $this->helperData->getTitle();
    }

    public function getText()
    {
        return $this->helperData->getPopupText();
    }

    public function getButtonText()
    {
        return $this->helperData->getButtonText() ?: 'Title';
    }

    public function getButtonColor()
    {
        return $this->helperData->getButtonColor() ? '#'.$this->helperData->getButtonColor() : '';
    }

    public function getFormActionUrl()
    {
        return $this->getUrl('newsletter/subscriber/new', ['_secure' => true]);
    }
}
