<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 10/18/15
 * Time: 12:49 PM
 */

require "vendor/autoload.php";

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'Checkout.wsdl',
        'outputDir' => 'Api/'
    ))
);