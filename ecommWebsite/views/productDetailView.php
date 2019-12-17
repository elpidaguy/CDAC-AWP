<?php
//$str = file_get_contents('http://localhost/ecommWebsite/js/data.json');
//$json = json_decode($str, true);

$sql = "SELECT * FROM products";
$sql2 = "SELECT * FROM categories";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);


?>

<section style="margin-top: 70px">
    <div class="row">
        <div class="col-md-2">
            <div style="height: 100%;border-right: 2px solid #c1c1c1">
                <a href="#demo" class="card card-body text-center bg-primary text-white" data-toggle="collapse">Categories</a>
                <div id="demo" class="collapse">
<!--                    <ul>-->
                        <?php
                        if ($result2->num_rows > 0) {
                        while($data2 = $result2->fetch_assoc()) {
                        ?>
                        <li class="alert alert-warning"><?php echo $data2['name']; ?></li>

                        <?php
                        }
                        } else {
                            echo "0 results";
                        }
                        ?>
<!--                    </ul>-->
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while($data = $result->fetch_assoc()) {
                    ?>
                        <div class="col-md-3">
                            <div class="card" style="width:320px;height: 600px">
                                <img class="card-img-top p-2" height="300px"
                                     src="<?php echo $data['img_url']; ?>"
                                     alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $data['name']; ?></h4>
                                    <hr>
                                    <h4><strong>Price: </strong> &#x20B9; <?php echo $data['price']; ?></h4>
                                        <p class="card-text"><?php echo $data['prod_desc']; ?></p>
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
            } else {
                echo "0 results";
            }
            ?>
            </div>
        </div>
    </div>
</section>