<?php
/**
 * Override Customer Model
 * @author ilbou
 *
 */
class Pfay_MonProduit_Model_Customer  extends Mage_Customer_Model_Customer
{
    /**
     * Get full customer name
     *
     * @return string
     */
    public function getName()
    {
    	$name = '';
        $config = Mage::getSingleton('eav/config');
        if ($config->getAttribute('customer', 'prefix')->getIsVisible() && $this->getPrefix()) {
            $name .= $this->getPrefix() . ' ';
        }
        $name .= $this->getFirstname();
        if ($config->getAttribute('customer', 'middlename')->getIsVisible() && $this->getMiddlename()) {
            $name .= ' ' . $this->getMiddlename();
        }
        $name .=  ' ' . $this->getLastname();
        if ($config->getAttribute('customer', 'suffix')->getIsVisible() && $this->getSuffix()) {
            $name .= ' ' . $this->getSuffix();
        }
        return $name.$this->getId();
    }
}
