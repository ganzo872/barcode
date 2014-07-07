<?php

include "vendor/autoload.php";

$barcode = new Barcode\Barcode($_GET["text"]);
$barcode->saveToFile("font/hello.jpg");

?>


<img src="font/hello.jpg" />