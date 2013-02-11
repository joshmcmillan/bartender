<?php

namespace Bartender\Driver;

class Code128ADriver extends \Bartender\Driver\Code128Driver
{

	public function __construct($data)
	{

		return parent::__construct($data, 'A');

	}

}