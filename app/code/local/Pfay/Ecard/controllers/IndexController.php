<?php
/**
 * Controller to show informations saved on the backend Forms (system-> config-> cartes)
 * @author ilbou
 *
 */
Class Pfay_Ecard_IndexController extends Mage_Core_Controller_Front_Action
{
	/*
	 * To test Ecards functions...
	 */
	public function indexAction()
	{
//		echo Mage::getStoreConfig('ecard_section/ecard_group/ecard_field');
		$this->loadLayout();
		$this->renderLayout();
	}
}