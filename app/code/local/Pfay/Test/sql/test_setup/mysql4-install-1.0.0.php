<?php
error_log("Start Installer N2 pfay/test/sql/test_setup/mysql4-install-.0.1.0.php");
/*
 * @var $installer Mage_Core_Model_Resource_Setup
*/
$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();
$connection->beginTransaction();
try {
	$table  = $connection->newTable($installer->getTable('pfay_test_listing_ville'))
	->addColumn('id_listing_ville', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
			'unsigned'  => true,
			'nullable'  => false,
			'primary'   => true,
			'identity' => true,
	), 'ID listing ville')
	->addColumn('pays', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
			'unsigned'  => true,
			'nullable'  => false,
			'primary'   => false,
	), 'Pays')
	->addColumn('nom', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
			'unsigned'  => true,
			'nullable'  => false,
			'primary'   => false,
	), 'Nom de la ville');
	$connection->createTable($table);
	$connection->commit();
}catch(Exception $e) {
	Mage::log($e->getMessage());
	$connection->rollBack();
}
$installer->endSetup();
error_log("End of Installer N2 pfay/test/sql/test_setup/mysql4-install-.0.1.0.php");

/**
 * installer (add an attribute to product )
 */
// ne fonctionne pas Mage::log("This is the Installer pfay/test/sql/test_setup/mysql4-install-.0.1.0.php");
error_log("This is the Installer N1 pfay/test/sql/test_setup/mysql4-install-.0.1.0.php");
$this->startSetup();
$this->addAttribute('catalog_product', 'my_field-9', array(
	'group'           => 'My Field',
	'type'            => 'int',
	'label'           => 'My Field 9',
	'input'           => 'select',
	'source'          => 'eav/entity_attribute_source_boolean',
	'backend'         => '',
	'frontend'        => '',
	'global'          => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'required'        => false,
	'default'         => '0',
	'user_defined'    => 0,
	'apply_to'        => 'simple',
	'note'            => '',
	'visible'         => true,
	'is_filterable_in_search', '0',
	'used_in_product_listing', '1',
));
$this->endSetup();