<?php

namespace Bartender\Driver;

class Code128CDriver extends \Bartender\Driver\Code128Driver
{

	public function __construct($data)
	{

		return parent::__construct($data, 'C');

	}

}