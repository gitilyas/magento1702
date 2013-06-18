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
	
	public function saveContact()
	{
		$nom 		= $this->getRequest()->getPost('nom');
		$prenom 	= $this->getRequest()->getPost('prenom');
		$telephone 	= $this->getRequest()->getPost('telephone');
		
		if(isset($nom) && ($nom!='') && isset($prenom) && ($prenom!='') && isset($telephone) && ($telephone!=''))
		{
			$contact = Mage::getModel('test/contact');
			$contact->setData('nom',$nom);
			$contact->setData('prenom',$prenom);
			$contact->setData('telephone',$telephone);
			if($contact->save()){
				Mage::getSingleton('core/session')->addSuccess('Contact: '.$nom.' '.$prenom.' '.$telephone.' added !!');
			}
		}
		
	}
	public function saveContactAction()
	{
		$this->saveContact();
		$this->_redirect('*/index/index');
	}
	
	/**
	 * mamethode action for Pfay_Test module
	 */
	public	function mamethodeAction()
	{
		echo 'Test mamethode';
	}
}