<?php
error_log("Start Update script");
$installer = $this;
$installer->startSetup();
$installer->run("DROP TABLE IF EXISTS {$this->getTable('pfay_test_customer_track')};
		CREATE TABLE IF NOT EXISTS {$this->getTable('pfay_test_customer_track')} (
		`id` INT UNSIGNED NOT NULL ,
		`sku` varchar(64) NOT NULL ,
		`customer_id` INT NOT NULL ,
		`region` varchar(255) NOT NULL ,
		`country_id` char(2) NOT NULL) ;");

$installer->endSetup();
error_log("end of Update script");