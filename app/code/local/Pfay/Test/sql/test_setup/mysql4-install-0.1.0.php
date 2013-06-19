<?php
/**
 * installer (add an attribute to product )
 */
$this->startSetup();
$this->addAttribute('catalog_product', 'my_field', array(
	'group'           => 'My Field',
	'type'            => 'int',
	'label'           => 'My Field',
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
