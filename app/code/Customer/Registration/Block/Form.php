<?php
namespace Customer\Registration\Block;

use Magento\Framework\View\Element\Template;

class Form extends Template
{
    protected $_formKey;

    public function __construct(
        Template\Context $context,
        \Magento\Framework\Data\Form\FormKey $formKey,
        array $data = []
    ) {
        $this->_formKey = $formKey;
        parent::__construct($context, $data);
    }

    public function getFormAction()
    {
        return $this->getUrl('registration/index/save', ['_secure' => true]);
    }

    public function getFormKey()
    {
        return $this->_formKey->getFormKey();
    }
}
