<?php

namespace Bartender;

abstract class Outputter
{
	
	protected $barcode, $options = array(), $defaultOptions = array();

	public function __construct(\Bartender\Driver $barcode, array $options = array())
	{

		$this->barcode = $barcode;
		$this->options = $options;

	}

	public function booleans()
	{

		$encoding = str_split($this->barcode->encoding());

		foreach($encoding as &$value)
		{

			$value = $value == '1';

		}

		return $encoding;

	}

	public function option($name)
	{

		$options = array_merge($this->defaultOptions, $this->options);

		return $options[$name];

	}
	
	abstract public function __toString();

}