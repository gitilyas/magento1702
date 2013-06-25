<?php
/**
 * Collection for test/contact model
 * @author ilbou
 *
 */
class Pfay_Test_Model_Mysql4_Contact_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
 {
     public function _construct()
     {
         parent::_construct();
         $this->_init('test/contact');
     }
}
