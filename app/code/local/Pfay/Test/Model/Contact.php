<?php
/**
 * Contact Model
 * @author ilbou
 *
 */
class Pfay_Test_Model_Contact extends Mage_Core_Model_Abstract
{
     public function _construct()
     {
         parent::_construct();
         $this->_init('test/contact'); // contact entity of test module
     }
}
