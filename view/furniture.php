<div class="col-12 col-sm-3 my-2">
    <div class="card">
    <input type="checkbox" class="m-3" name="products[]" value="<?php echo $product->sku ?>">
        <div class="card-body"><?php echo $product->sku ?></p>
            <p class="card-text"><?php echo $product->name ?></p>
            <p class="card-text"><?php echo $product->price ?> $</p>
            <p class="card-text"><?php echo $product->height ?>X<?php echo $product->width ?>X<?php echo $product->length ?></p>
        </div>
    </div>
</div>