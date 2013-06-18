<?php
 require_once 'Mage/Cms/controllers/PageController.php';
 
class Mage_Sintax_Cms_PageController extends Mage_Cms_PageController
{
 
    public function viewAction()
    {
        error_log('TEEEEEEEST this is a CMS page : Mage_Sintax_Cms_PageController : ViewAction Controller is overridden');
    	Mage::log("TEEEEEEEST this is a CMS page : Mage_Sintax_Cms_PageController : ViewAction Controller is overridden");
        $pageId = $this->getRequest()->getParam('page_id', $this->getRequest()->getParam('id', false));
        if (!Mage::helper('cms/page')->renderPage($this, $pageId)) {
            $this->_forward('noRoute');
        }
    }
 
}