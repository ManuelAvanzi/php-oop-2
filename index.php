<?php

//includo le  classi
include_once __DIR__ . "/classes/toy.php";
include_once __DIR__ . "/classes/food.php";
include_once __DIR__ . "/classes/product.php";
include_once __DIR__ . "/classes/user.php";
include_once __DIR__ . "/classes/accessories.php";






//dati di un utente
$user1 = new User([
    "firstName" => "Manuel",
    "lastName" => "Avanzi",
    "email" => "ma@gmail.com",
    "registered" => false,
    "cart" => ["item1"],
    "cardNumber" => 124564789111111,
    "cardType" => "Postepay",
    "cardExpiration" => "2022-03-01",
    "cvv" => 906,
]);

var_dump($user1);

$product1 = new Product([
    "id"=>1,
    "name"=>"gioco per cane",
    "description" => "giocattolo per cane domestico",
    "price"=>3.0
]);


$user1->pushCart($product1);

var_dump($user1);

$toy1=new Toy([
    "id"=>1,
    "name"=>"osso per cane",
    "description" => "un osso per cane",
    "price"=>3.0,
    "isForTraining"=>true,
    "material"=>'plastic'
]);
var_dump($toy1);

$food1=new Food([
    "id"=>2,
    "name"=>"croccantini classici",
    "description" => "croccantini per cani e gatti",
    "price"=>5.0,
    "type" =>"croccantino",
    "brand"=>"cani&gatti",
    "expiration"=>"2023-06-24"
]);
var_dump($food1);


$accessories1=new Accessories([
    "id"=>4,
    "name"=>"cuccia",
    "description" => "una cuccia per gli animali",
    "price"=>6.2,
    "accessoriesType"=>"cuccia per animali"
]);
var_dump($accessories1);