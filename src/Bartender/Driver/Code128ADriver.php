<?php

namespace Bartender\Driver;

/**
 * This is a driver for Code 128A barcodes
 *
 * @author  Josh McMillan <josh@joshmcmillan.co.uk>
 */
class Code128ADriver extends \Bartender\Driver\Code128Driver
{

	public function __construct($data)
	{

		return parent::__construct($data, 'A');

	}

}