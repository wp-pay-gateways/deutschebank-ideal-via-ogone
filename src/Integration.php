<?php

/**
 * Title: Deutsche Bank - iDEAL via Ogone - Integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_DeutscheBank_IDealViaOgone_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_Integration {
	public function __construct() {
		$this->id       = 'deutschebank-ideal-via-ogone';
		$this->name     = 'Deutsche Bank - iDEAL via Ogone';
		$this->provider = 'deutschebank';
	}
}
