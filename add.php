<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <form action="productController.php" method="post" onsubmit="return validateFields(this)">
    <input type="hidden" name="_method" value="post"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex m-3">
                    <p class="m-0 align-self-center">Product add</p>
                </div>
                <div class="col m-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-light">Save</button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="form-group row">
                <label class="col-2">SKU</label>
                <div class="col-4">
                    <input type="number" class="form-control" name="sku" required="true">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2">Name</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="name" required="true">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2">Price</label>
                <div class="col-4">
                    <input type="number" class="form-control" name="price" step="0.01" required="true">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2">Type switcher</label>
                <div class="col-4">
                    <select class="form-control" id="opt-select" name="type">
                        <option value="opt-dvd">DVD-disc</option>
                        <option value="opt-book">Book</option>
                        <option value="opt-furniture">Furniture</option>
                    </select>
                </div>
                <p></p>
            </div>

        </div>

        <div class="container" id="dvd-disc">

            <div class="form-group row">
                <label class="col-2">Size</label>
                <div class="col-4"><input type="number" class="form-control" name="size" min="0"></div>
            </div>

            <p>Please provide the size of the disc in MB</p>
        </div>

        <div class="container" id="book">

            <div class="form-group row">
                <label class="col-2">Weight</label>
                <div class="col-4"><input type="number" class="form-control" name="weight" step="0.001" min="0"></div>
            </div>

            <p>Please provide the weight of the book in KG</p>
        </div>

        <div class="container" id="furniture">

            <div class="form-group">
                <div class="row my-1">
                    <label class="col-2">Height</label>
                    <div class="col-4"><input type="number" class="form-control" name="height" step="0.01" min="0"></div>
                </div>
                <div class="row my-1">
                    <label class="col-2">Width</label>
                    <div class="col-4"><input type="number" class="form-control" name="width" step="0.01" min="0"></div>
                </div>
                <div class="row my-1">
                    <label class="col-2">Length</label>
                    <div class="col-4"><input type="number" class="form-control" name="length" step="0.01" min="0"></div>
                </div>
            </div>

            <p>Please provide the dimensions in HxWxL format in meters</p>
        </div>
        <div class="container"><p id="errormsg"></p></div>
    </form>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>