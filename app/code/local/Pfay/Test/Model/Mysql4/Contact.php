<?php
/**
 * 
 * @author ilbou
 *
 */
class Pfay_Test_Model_Mysql4_Contact extends Mage_Core_Model_Mysql4_Abstract
{
     public function _construct()
     {
         $this->_init('test/contact', 'id_pfay_test_contacts');
     }
}
