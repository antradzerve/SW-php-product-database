<?php

include ("Model/productModel.php");

function PostRequest() {

    echo 'Executing POST request...\n';

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
    echo 'Before execution...';
    PostRequest();
}


?>