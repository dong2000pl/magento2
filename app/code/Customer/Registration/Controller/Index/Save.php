<?php
namespace Customer\Registration\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Customer\Registration\Model\RegistrationFactory;

class Save extends Action
{
    protected $registrationFactory;

    public function __construct(
        Context $context,
        RegistrationFactory $registrationFactory
    ) {
        $this->registrationFactory = $registrationFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $post = $this->getRequest()->getPostValue();
        if (!$post) {
            return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/*/');
        }

        try {
            $registration = $this->registrationFactory->create();
            $registration->setData($post);
            $registration->save();
            $this->messageManager->addSuccessMessage(__('Registration successful.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('There was an error processing your registration.'));
        }

        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/*/');
    }
}
