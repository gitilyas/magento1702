<?php
/**
 * exemple d'un block pour le module Pfay_Test
 */

class Pfay_Ecard_Block_Ecard extends Mage_Core_Block_Template
{

	public function getEcardNumbers()
	{
		return Mage::getStoreConfig('ecard_section/ecard_group/ecard_field');
	}
      
}