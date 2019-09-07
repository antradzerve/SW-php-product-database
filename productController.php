<?php

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

/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=scandiweb", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database\n';
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
}
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    echo 'Before execution...';
    PostRequest();
}


?>