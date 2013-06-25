<?php
class Pfay_Test_Block_Adminhtml_Test_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
	/**
	 * Activer tinyMce dans le header
	 * 
	 * @see Mage_Adminhtml_Block_Widget_Form::_prepareLayout()
	 */
	protected function _prepareLayout()
	{
		parent::_prepareLayout();
// 		NE FONCTIONNE PAS DANS LE BLOCK - A COPIER DANS LE CONTROLLEUR
// 		if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
// 			Mage::log("Enable");
// 			Mage::log($this->getLayout()->getBlock('head'));
// 			$this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
// 		}
	}
	
	
	protected function _prepareForm()
   {
       $form = new Varien_Data_Form();
       $this->setForm($form);
       $fieldset = $form->addFieldset('test_form',
                                       array('legend'=>'ref information'));
          $fieldset->addField('nom', 'text',
                       array(
                          'label' => 'Nom',
                          'class' => 'required-entry',
                          'required' => true,
                           'name' => 'nom',
                    ));
          $fieldset->addField('prenom', 'text',
                         array(
                          'label' => 'Prenom',
                          'class' => 'required-entry',
                          'required' => true,
                          'name' => 'prenom',
                      ));
          $fieldset->addField('telephone', 'text',
                    array(
                        'label' => 'telephone',
                        'class' => 'required-entry',
                        'required' => true,
                        'name' => 'telephone',
                 ));

          // addField pour ajouter son champs editor TinyMCE
          $fieldset->addField('editeur', 'editor', array(
          		'name'      => 'editeur',
          		'label'     => 'Editeur',
          		'style'     => 'width:700px; height:500px;',
          		'config'    => Mage::getSingleton('cms/wysiwyg_config')->getConfig(),
          		'wysiwyg'   => true,
          		'theme' 	=> 'advanced',
          		'required'  => false,
          		'class' => 'required-entry',
          ));
          
 if ( Mage::registry('test_data') )
 {
    $form->setValues(Mage::registry('test_data')->getData());
  }
  return parent::_prepareForm();
 }
}
