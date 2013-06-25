<?php
class Pfay_Test_Block_Adminhtml_Grid extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
     //on indique ou va se trouver le controller
     $this->_controller = 'adminhtml_test';
     $this->_blockGroup = 'test';
     //le texte du header qui s’affichera dans l’admin
     $this->_headerText = 'Gestion de mon carnet d\'adresse';
     //le nom du bouton pour ajouter une un contact
     $this->_addButtonLabel = 'Ajouter un contact';
     parent::__construct();
     }
}
