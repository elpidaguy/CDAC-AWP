<?php
$str = file_get_contents('http://localhost/ecommWebsite/js/data.json');
$json = json_decode($str, true);

?>

<section style="margin-top: 70px">
    <div class="row">
        <div class="col-md-3">
            <div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
            <?php
                foreach ($json as $data) {
                    ?>
                        <div class="col-md-4">
                            <div class="card" style="width:300px">
                                <img class="card-img-top p-2"
                                     src="https://m.media-amazon.com/images/I/51-pb2hDPAL._AC_UY218_ML3_.jpg"
                                     alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $data['Name']; ?></h4>
                                    <hr>
                                    <h4><strong>Price: </strong> &#x20B9; <?php echo $data['price']; ?></h4>
                                    <p class="card-text"><?php echo $data['desc']; ?></p>
                                    <hr>
                                    <div class="row" style="padding: 0px !important;">
                                        <div class="col-md-4">
                                            <!--                                            <label>Qty: </label>-->
                                            <input type="number" placeholder="Enter QTY" class="form-control" name="qty" min="1" max="10">
                                        </div>
                                        <div class="text-center col-md-8 mt-2">
                                            <button onclick="addToCart(<?php echo $data['id']; ?>)" class="btn btn-danger"> <i class="fa fa-shopping-cart"
                                                                                                                               aria-hidden="true"></i>
                                                Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
            </div>
        </div>
    </div>
</section>