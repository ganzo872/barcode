<?php namespace Barcode;

use Barcode\BCGFontFile;
use Barcode\BCGColor;
use Barcode\BCGcode128;
use Barcode\BCGDrawing;

class Barcode {


	public function __construct($text = "")
	{
		$this->font = new BCGFontFile('./font/Arial.ttf', 18);

		// The arguments are R, G, B for color.
		$this->color_black = new BCGColor(0, 0, 0);
		$this->color_white = new BCGColor(255, 255, 255);


		$this->make($text);
	}

	private function make( $text = "" )
	{
		$code = new BCGcode128();
		$code->setScale(2); // Resolution
		$code->setThickness(30); // Thickness
		$code->setForegroundColor($this->color_black); // Color of bars
		$code->setBackgroundColor($this->color_white); // Color of spaces
		$code->setFont($this->font); // Font (or 0)
		$code->parse($text); // Text
		$this->code = $code;
	}

	public function saveToFile( $destination = "" )
	{
		$drawing = new BCGDrawing($destination, $this->color_white);

		$drawing->setBarcode($this->code);
		$drawing->draw();
		$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);
	}

	public function getGraphicObject()
	{
		
	}
}