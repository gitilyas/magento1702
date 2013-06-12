<?php
/**
 * exemple d un controlleur Index 
 * du module Test dans le namespace Pfay
 */
class Pfay_Test_IndexController extends Mage_Core_Controller_Front_Action
{
	/**
	 * index action for Pfay_Test Module
	 */
	
	public function indexAction()
	{
		$this->loadLayout();
		$this->renderLayout();
		
	}
	
	/**
	 * mamethode action for Pfay_Test module
	 */
	public	function mamethodeAction()
	{
		echo 'Test mamethode';
	}
}