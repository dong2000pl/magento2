<?php
namespace Customer\Registration\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        if (!$installer->tableExists('registration_table')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('registration_table'))
            ->addColumn(
                'entity_id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Entity ID'
            )
            ->addColumn(
                'name',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Name'
            )
            ->addColumn(
                'dob',
                Table::TYPE_DATE,
                null,
                ['nullable' => false],
                'Date of Birth'
            )
            ->addColumn(
                'email',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Email'
            )
            ->setComment('Registration Table');
            $installer->getConnection()->createTable($table);
        }

        $installer->endSetup();
    }
}
