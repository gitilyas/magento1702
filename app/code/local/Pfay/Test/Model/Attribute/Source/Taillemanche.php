<?php

class Pfay_Test_Model_Attribute_Source_Taillemanche extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    const UNMETRECINQUANTE= 150;
    const DEUXMETRE = 200;
    public function getAllOptions()
    {
        if (is_null($this->_options)) {
            $this->_options = array(
                array(
                    'label' => Mage::helper('core')->__('1m50'),
                    'value' => self::UNMETRECINQUANTE
                ),
                array(
                    'label' => Mage::helper('core')->__('2m'),
                    'value' => self::DEUXMETRE
                ),
            );
        }
        return $this->_options;
    }
    
    public function getOptionText($value)
    {
        $options = $this->getAllOptions();
        foreach ($options as $option) {
                if (in_array($option['value'], $value)) {
                    return $option['label'];
                }
        }
        return false;
    }
}
