<?php
namespace Customer\Registration\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Registration extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('registration_table', 'entity_id');
    }
}
