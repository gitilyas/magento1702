<?php
require_once "Mage/Checkout/controllers/CartController.php";
class Pfay_Test_Checkout_CartController extends Mage_Checkout_CartController
{
    # surcharge de indexAction
    public function indexAction() {
        die('votre mothode a bien été surchargé !!');
    }
}
