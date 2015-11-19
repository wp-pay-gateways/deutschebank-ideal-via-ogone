<?php

class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealViaOgone_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_Integration {
	public function __construct() {
		$this->id       = 'deutschebank-ideal-via-ogone';
		$this->name     = 'Deutsche Bank - iDEAL via Ogone';
		$this->provider = 'deutschebank';
	}
}
