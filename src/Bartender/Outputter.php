<?php

namespace Bartender;

/**
 * This is an abstract class which all outputters extend
 *
 * @author  Josh McMillan <josh@joshmcmillan.co.uk>
 */
abstract class Outputter
{
	
	/**
	 * Instance of a barcode driver
	 * @var \Bartender\Driver
	 */
	protected $barcode;

	/**
	 * Options passed to outputter
	 * @var array
	 */
	protected $options = array();

	/**
	 * Default options used
	 * @var array
	 */
	protected $defaultOptions = array();

	/**
	 * Constructor
	 * 
	 * @param \Bartender\Driver $barcode Barcode driver instance
	 * @param array             $options Options
	 */
	public function __construct(\Bartender\Driver $barcode, array $options = array())
	{

		$this->barcode = $barcode;
		$this->options = $options;

	}

	/**
	 * Returns the encoded barcode value as an array of booleans instead of 0s and 1s
	 * 
	 * @return array
	 */
	public function booleans()
	{

		$encoding = str_split($this->barcode->encoding());

		foreach($encoding as &$value)
		{

			$value = $value == '1';

		}

		return $encoding;

	}

	/**
	 * Fetches an option by merging the default options and user-defined options
	 * 
	 * @param  string $name Option name
	 * @return mixed        Option value
	 * 
	 * @todo   Handle nonexistent option
	 */
	public function option($name)
	{

		$options = array_merge($this->defaultOptions, $this->options);

		return $options[$name];

	}
	
	abstract public function __toString();

}