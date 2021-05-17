<?php include("inc/header.php"); ?>
<?php
use TechStore\classes\MODELS\orders;
use TechStore\classes\MODELS\OrderDetails;
$ords= new orders;
if ($reqest->getHas('id')) {
  $id= $reqest->get('id');
}else
{
  $id=1;
}
 $orders=  $ords->selectId($id,"orders.*,SUM(qty *  price)AS total");

 $ordda= new OrderDetails ;
  $orderdatils=  $ordda->selectwithproducts($id);




?>
    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Show Order : <?= $orders['id'];?></h3>
                <div class="card">
                    <div class="card-body p-5">
                        <table class="table table-bordered">
                            <thead>
                                <th colspan="2" class="text-center">Customer</th>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Name</th>
                                <td><?= $orders['name']; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Email</th>
                                <td><?=$orders['email']   ; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Phone</th>
                                <td><?=$orders['phone']; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Address</th>
                                <td><?=$orders['address']; ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Time</th>
                                <td><?= date("d M,Y h:i A" ,strtotime($orders['created_at']));?></td>
                              </tr>
                              <tr>
                                <th scope="row">Status</th>
                                <td><?=$orders['status']; ?></td>
                              </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($orderdatils as  $product) :?>
                        
                        
                              <tr>
                                <td><?= $product['name'];?></td>
                                <td><?= $product['qty'];?></td>
                                <td>$<?= $product['price'];?></td>
                              </tr>
                              <?php    endforeach ?>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Total</th>
                                    <?php if ($orders['status']=='pending') :?>
                                      <th>Change Status</th>
                               <?php   endif  ?>
                                 
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>$<?=$orders['total'] ?></td>
                                <?php if ($orders['status']=='pending') :?>
                                     
                                    
                                <td>
                                    <a class="btn btn-success" href="<?=AURL."handelr/Approve.php?id=".$orders['id']; ?>">Approve</a>
                                    <a class="btn btn-danger" href="<?=AURL."handelr/Cancel.php?id=".$orders['id']; ?>">Cancel</a>
                                </td>
                                <?php   endif  ?>
                              </tr>
                            </tbody>
                        </table>

                        <a class="btn btn-dark" href="<?=AURL ."orders.php"; ?>">Back</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
   <?php include("inc/footer.php"); ?>