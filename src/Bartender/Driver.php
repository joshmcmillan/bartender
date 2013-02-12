<?php

namespace Bartender;

/**
 * This is an abstract class which all drivers extend.
 *
 * @author  Josh McMillan <josh@joshmcmillan.co.uk>
 */
abstract class Driver
{

	abstract public function __construct($data);
	abstract public function encoding();

}