<?php

include ("Model/productModel.php");

class ProductController{

public function PostRequest() {

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
    header('Location: add.php');
}
  
public function getAllProducts() {

    $arr = ProductModel::getAll();
    return $arr;

}

public function delete($sku) {
    $product = ProductModel::getOne($sku);
    $product->delete();
    header('Location: /');
}

}

$controller = new ProductController();

if (isset($_REQUEST['_method'])) {
    switch($_REQUEST['_method'])
    {
        case 'post':
            $controller->PostRequest();
            break;
        case 'delete':
            if(isset($_REQUEST['products'])){
                $skuForDeletion = $_REQUEST['products'];
                foreach ($skuForDeletion as $sku){
                    $controller->delete($sku);
                }
            }
            break;
        default:
            echo 'sumtin wong';
    }
}

?>