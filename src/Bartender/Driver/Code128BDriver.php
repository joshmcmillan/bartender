<?php

namespace Bartender\Driver;

/**
 * This is a driver for Code 128B barcodes
 *
 * @author  Josh McMillan <josh@joshmcmillan.co.uk>
 */
class Code128BDriver extends \Bartender\Driver\Code128Driver
{

	public function __construct($data)
	{

		return parent::__construct($data, 'B');

	}

}