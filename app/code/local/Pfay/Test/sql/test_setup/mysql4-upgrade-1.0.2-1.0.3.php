<?php
error_log("Start Installer MAJ(1.0.2-1.0.3) pfay/test/sql/test_setup/");
/*
 * @var $installer Mage_Core_Model_Resource_Setup
*/
$installer = $this;
$installer->startSetup();

// Creation du Attribute Set "Balais"
$entityType = 'catalog_product';
$attrSetName = 'Balais';
$attrGroupName = 'Balais';

$installer->addAttributeSet($entityType, $attrSetName);

// Copy of all attributes of Default-Attribute-Set to the "Balais" attribute-Set

//on récupére l'id de l'attributeSet par défaut
$attrSetDefaultId =  $installer->getAttributeSet($entityType, 'Default', 'attribute_set_id');
//on recupere l'id de l'attributeSet qu'on a crée précédemment
$attrSetId = $installer->getAttributeSet($entityType, $attrSetName, 'attribute_set_id');
//on copie les champs par défaut grace a la méthode initFromSkeleton
$attrSet = Mage::getModel('eav/entity_attribute_set')->load($attrSetId);
$attrSet->initFromSkeleton($attrSetDefaultId);
$attrSet->save();

//Attribute group creation

//on recupere l'id de l'attributeSet "Balais"
$attrSetId = $installer->getAttributeSet($entityType, $attrSetName, 'attribute_set_id');
//on crée l'attributeGroup
$installer->addAttributeGroup($entityType, $attrSetId, $attrGroupName);

/*
 * ATTRIBUT taillemanche
*/
//Creation de l'Attribut
$installer->addAttribute($entityType, 'taillemanche',array('
		label'		=> 'Taille du manche', //le label
		'type'		=> 'int',    //backend_type
		'input'		=> 'select', //frontend_input
		'source'	=> 'test/attribute_source_taillemanche',  // "test/attribute" et pas "pfay_test/attribute..."  //ici on définit les options du select (voir la suite)
		'required'	=> true, //le champs est requis
		'visible'	=> true, //le champs est visible
		'default'	=> '0', //la valeur par default est 0
		'group'		=> 'Balais', //il sera dans l'onglet "Balais" de la fiche produit (en admin)
		'global'	=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE, //il est défini par Store
		));

//On ajoute l'attribut à l'attributeSet
$installer->addAttributeToSet($entityType, $attrSetId, $attrGroupName, 'taillemanche');

$installer->endSetup();



