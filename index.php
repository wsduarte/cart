<?php


require_once 'vendor/autoload.php';

use App\ProductX;
use App\Cart;
use App\Cupom;



$productX = new ProductX();
$cart = new Cart();

$cart->addProduct($productX);
$cart->addProduct($productX);


$cupom = new Cupom();
$cupom->setTotal(10);

$cart->applyCupom($cupom);

echo "<pre>";
var_dump($cart->getItens());
echo "</pre>";

echo $cart->getTotal();

echo "<hr >";

$productX = new ProductX();
$productX->setName('TV Plasma');
$productX->setPrice(2000);
$cart = new Cart();

$cart->addProduct($productX);


$cupom = new \App\CupomPercentage();
$cupom->setTotal(10);

$cart->applyCupom($cupom);

echo "<pre>";
var_dump($cart->getItens());
echo "</pre>";

echo $cart->getTotal();




