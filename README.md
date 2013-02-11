# Bartender

Bartender is a [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md) compliant library which allows you to create Barcodes using PHP.

Presently it doesn't do much - it simply converts a string to a Code 128 barcode in PNG format.

## Usage

To get a barcode, simply pass a driver into an outputter.

	$barcode = \Bartender\Driver\Code128BDriver('Barcode123');
	$output  = \Bartender\Outputter\PNGOutputter($output);

	header('Content-Type: image/png');

	echo $output;

Easy as pie.

## Available Drivers

* \Bartender\Driver\Code128ADriver
* \Bartender\Driver\Code128BDriver
* \Bartender\Driver\Code128CDriver

## Available Outputters

* \Bartender\Outputter\PNGOutputter

## Authors

Bartender is currently maintained by [Josh McMillan](http://joshmcmillan.co.uk).