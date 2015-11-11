<?php

class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealViaOgone_Integration {
	public function __construct() {
		$this->id       = 'deutschebank-ideal-via-ogone';
		$this->name     = 'Deutsche Bank - iDEAL via Ogone';
		$this->provider = 'deutschebank';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_Gateway';
	}
}
