   <?php include("inc/header.php"); ?>
   <?php
   use TechStore\classes\MODELS\prodect;
   use TechStore\classes\MODELS\Cats;
   use TechStore\classes\MODELS\orders;
    $pr= new prodect;
   $prodCount= $pr->getCount();
   $c= new Cats;
   $categoryCount=$c->getCount();
   $ord= new  orders;
   $ordCount=$ord->getCount();
   ?>



    <div class="container py-5">
        <div class="row">

            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?=$prodCount;?></h5>
                          <a href="<?= AURL;?>products.php" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?= $categoryCount;?></h5>
                          <a href="<?= AURL;?>categories.php" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Orders</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?= $ordCount;?></h5>
                          <a href="<?= AURL;?>orders.php" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
   <?php include("inc/footer.php"); ?>