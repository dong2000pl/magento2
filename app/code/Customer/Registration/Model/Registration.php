<?php
namespace Customer\Registration\Model;

use Magento\Framework\Model\AbstractModel;

class Registration extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Customer\Registration\Model\ResourceModel\Registration');
    }
}
