<?php
 require_once 'Mage/Customer/controllers/AccountController.php';
 class Mage_Sintax_Customer_AccountController extends Mage_Customer_AccountController
{
 
    /**
     * Redirects user to home page...
     */
    protected function _loginPostRedirect()
    {
    	$this->_redirectUrl(Mage::getBaseUrl());
    }
 
}