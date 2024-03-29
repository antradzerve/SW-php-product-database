<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<form action="productController.php" method="post">
<input type="hidden" name="_method" value="delete">
    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex m-3">
                <h2 class="m-0 align-self-center">Product list</h2>
            </div>
            <div class="col m-3">
                <div class="row">
                    <div class="col-9">
                        <select class="custom-select">
                            <option value="0" selected>Select action</option>
                            <option value="1">Mass delete</option>
                        </select>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <button name="delete" type="submit" id="applybutton" class="btn btn-light disabled">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php

                include("productController.php");
                $controller = new ProductController();
                $arr = $controller->getAllProducts();
                foreach ($arr as $product) {
                    $type = $product->type;
                    switch ($type) {
                        case 'opt-book':
                            include('view/book.php');
                            break;
                        case 'opt-dvd':
                            include('view/dvd.php');
                            break;
                        case 'opt-furniture':
                            include('view/furniture.php');
                            break;
                        default:
                            include('view/error.php');
                            break;
                    }
                }
                ?>
        </div>
    </div>
    </form>

    <div class="container-fluid">
        <button onclick="window.location.href = './add.php'" class="btn btn-light my-3">Add product</button>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

