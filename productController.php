<?php

include ("Model/productModel.php");

function PostRequest() {

    $sku = $_REQUEST['sku'];
    $name = $_REQUEST['name'];
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
  
if (isset($_REQUEST['_method'])) {
    switch($_REQUEST['_method'])
    {
        case 'post':
            PostRequest();
            header('Location: add.php');
            break;
        case 'delete':
            if(isset($_REQUEST['products'])){
                $skuForDeletion = $_REQUEST['products'];
                foreach ($skuForDeletion as $sku){
                    ProductModel::delete($sku);
                }
            }
            header('Location: /'); 
            break;
        default:
            echo 'sumtin wong';
    }
}



function getAllProducts() {

    $arr = ProductModel::getAll();
    return $arr;

}

?>