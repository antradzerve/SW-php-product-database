<div class="col-12 col-sm-3 my-2">
    <div class="card">
        <div class="card-body text-center">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex">
                        <input type="checkbox" class="m-1 align-self-center" name="products[]" value="<?php echo $product->sku ?>">
                    </div>
                    <div class="col-9">
                        <p class="card-text"><?php echo $product->sku ?></p>
                        <p class="card-text"><strong><u><?php echo $product->name ?></u></strong></p>
                        <p class="card-text"><?php echo $product->price ?> $</p>
                        <p class="card-text"><?php echo $product->weight ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>