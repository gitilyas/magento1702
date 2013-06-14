<?php
/**
 * Block for Pfay_Test module (backend)
 */

class Pfay_Test_Block_Adminhtml_Monblock extends Mage_Core_Block_Template
{
	/**
	 * Return the ceated contact ID
	 * @return string
	 */
	public function createNewContact()
	{
		$contact = Mage::getModel('test/contact');
		$contact->setNom('TheName');
		$contact->setPrenom('TheLastname');
		$contact->setTelephone('0612458965');
		$contact->save();
		if($id = $contact->getId()){ 
			return 'Contact with ID'.$id.'was created !';
		}else {
			return 'contact was not created';
		}
		 
	}
	
	/**
	 * Edit the first contact
	 * @return string
	 */
	public function editFirstContact()
	{
		$contact = Mage::getModel('test/contact');
		$contact->load(1);
		$contact->setNom("TheName".rand());
		$contact->save();
		return 'First Contact edited';
	}

	/**
	 * return all conacts
	 * @return string
	 */
     public function showAllContacts()
     {
        //on initialize la variable
        $retour='';
        /* on fait une requette : aller chercher Tous les elements
        de la table pfay_test_contacts (grace à notre model test/contact
        et les trier par id_pfay_test_contacts */
     	$collection = Mage::getModel('test/contact')->getCollection()
                                 ->setOrder('id_pfay_test_contacts','asc');
         /* ensuite on parcours le resultat de la requette et
          avec la fonction getData(), on stocke dans la variable retour
          (pour l’affichage dans le template) les données voulues */
        foreach($collection as $data)
        {
             $retour .= $data->getData('nom').' '.$data->getData('prenom')
                     .' '.$data->getData('telephone').'<br />';
         }
         //je renvoi un message de succes a l'utilisateur (juste pour que vous sachiez utiliser la fonction)
         Mage::getSingleton('adminhtml/session')->addSuccess(' Ca marche !!!!!!');
         return $retour;
      }
}