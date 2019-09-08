<?php

include ("Model/productModel.php");

function PostRequest() {

    $sku = $_REQUEST['sku'];
    $name = $_POST['name'];
    $price = $_REQUEST['price'];
    $type = $_REQUEST['type'];
    $size = empty($_REQUEST['size']) ? null : $_REQUEST['size'];
    $weight = empty($_REQUEST['weight']) ? null : $_REQUEST['weight'];
    $height = empty($_REQUEST['height']) ? null : $_REQUEST['height'];
    $width = empty($_REQUEST['width']) ? null : $_REQUEST['width'];
    $length = empty($_REQUEST['length']) ? null : $_REQUEST['length'];

    $product = new ProductModel(
        $sku,
        $name,
        $price,
        $type,
        $size,
        $weight,
        $height,
        $width,
        $length
    );

    $product->save();
}
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    PostRequest();
}

function getAllProducts() {

    $allProducts = ProductModel::getAll();

    $book = new ProductModel(
        13,
        "hp",
        444,
        "opt-book",
        1,
        NULL,
        NULL,
        NULL,
        NULL
    );

    $dvd = new ProductModel(
        3,
        "hp",
        444,
        "opt-dvd",
        NULL,
        12,
        NULL,
        NULL,
        NULL
    );

    $furniture = new ProductModel(
        1,
        "hp",
        894,
        "opt-furniture",
        NULL,
        NULL,
        5,
        6,
        7
    );

    //todo: get this from model
    $arr = array($book, $dvd, $furniture);

    return $arr;

}



?>