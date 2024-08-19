<?php
namespace Customer\Registration\Model\ResourceModel\Registration;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Customer\Registration\Model\Registration as Model;
use Customer\Registration\Model\ResourceModel\Registration as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
