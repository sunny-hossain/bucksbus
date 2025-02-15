<?php

/**
 * @author   BucksBus
 * @package  WooCommerce BucksBus
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

class BucksBus_Gateway_USDC_ERC20 extends BucksBus_Gateway_Base
{
	public function __construct()
	{
		parent::__construct('USDC.ERC20');
	}
}
