<?php
namespace Customer\Registration\Block\Adminhtml\Customer;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Customer\Registration\Model\ResourceModel\Registration\CollectionFactory;

class View extends Template
{
    protected $collectionFactory;

    public function __construct(
        Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getRegistrations()
    {
        $collection = $this->collectionFactory->create();
        return $collection->getItems();
    }
}
