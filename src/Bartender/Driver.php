<?php

namespace Bartender;

abstract class Driver
{

	abstract public function __construct($data);
	abstract public function encoding();

}