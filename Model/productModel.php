<?php

class ProductModel
{
    public $sku;
    public $name;
    public $price;
    public $type;
    public $size;
    public $weight;
    public $height;
    public $length;
    public $width;

    public function __construct(
        $sku,
        $name,
        $price,
        $type,
        $size,
        $weight,
        $height,
        $length,
        $width
    ) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->size = $size;
        $this->weight = $weight;
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
    }

    private static function createConnection()
    {
        /*** mysql hostname ***/
        $hostname = '127.0.0.1';

        /*** mysql username ***/
        $username = 'root';

        /*** mysql password ***/
        $password = 'root';

        try {
            $conn = new PDO("mysql:host=$hostname;dbname=scandiweb", $username, $password);
            /*** echo a message saying we have connected ***/
            return $conn;
        } catch (PDOException $e) {
            //TODO: DON'T ECHO
            echo $e->getMessage();
            return false;
        }
    }

    public function save()
    { 
        $conn = $this->createConnection();
        if (!$conn) {
            return;
        }

        try{    
            $sql = "INSERT INTO products (sku, name, price, type, size, weight, height, width, length) VALUES (:sku, :name, :price, :type, :size, :weight, :height, :width, :length)";
            $stmt = $conn->prepare($sql);
        
            $stmt->bindParam(':sku', $this->sku);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':type', $this->type);
            $stmt->bindParam(':size', $this->size);
            $stmt->bindParam(':weight', $this->weight);
            $stmt->bindParam(':height', $this->height);
            $stmt->bindParam(':width', $this->width);
            $stmt->bindParam(':length', $this->length);
        
            $stmt->execute();
            
        } catch(PDOException $e){
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }

        unset($conn);
    }

    public static function getAll(){
        $conn = ProductModel::createConnection();
        if (!$conn) {
            return;
        }
        
        $sth = $conn->query("SELECT * FROM products");
        $result = $sth->fetchAll();

        $arr = array();

        foreach ($result as $row) {

            $newProduct = new ProductModel($row['sku'],$row['name'],$row['price'],$row['type'],$row['size'],$row['weight'],$row['height'],$row['width'],$row['length'] );
            array_push($arr, $newProduct);
        }
        return $arr;

    }

}
