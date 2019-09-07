<?php

    $sku = $_REQUEST['sku'];
    $name = $_POST['name'];
    $price = $_REQUEST['price'];
    $type = $_REQUEST['type'];
    $size = $_REQUEST['size'];
    $weight = $_REQUEST['weight'];
    $height = $_REQUEST['height'];
    $width = $_REQUEST['width'];
    $length = $_REQUEST['length'];

/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=scandiweb", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

try{    
    $sql = "INSERT INTO products (sku, name, price, type, size, weight, height, width, length) VALUES (:sku, :name, :price, :type, :size, :weight, :height, :width, :length)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':sku', $sku);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':weight', $weight);
    $stmt->bindParam(':height', $height);
    $stmt->bindParam(':width', $width);
    $stmt->bindParam(':length', $length);

    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

?>