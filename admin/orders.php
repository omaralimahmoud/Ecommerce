<?php include("inc/header.php"); ?>
<?php 

use TechStore\classes\MODELS\orders;
$ord= new orders;
 $ordrs=  $ord->select("orders.id,orders.name,orders.phone,orders.status,orders.created_at,SUM(qty *  price)AS total");



?>
    <div class="container-fluid py-5">
        <div class="row">

            <div class="col-md-10 offset-md-1">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>All Orders</h3>
                </div>

                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Total</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ( $ordrs as $index=>  $ord) :?>
                    
                 
                      <tr>
                        <th scope="row"><?=$index+1;  ?></th>
                        <td><?= $ord['name']; ?></td>
                        <td><?=$ord['phone'] ;   ?></td>
                        <td>$<?=$ord['total']    ?></td>
                        <td><?=date("d M,Y h:i A" ,strtotime(  $ord['name']));?></td>
                        <td><?=$ord['status']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?= AURL . "order.php?id=". $ord['id'];   ?>">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                      </tr>
                      <?php  endforeach  ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php include("inc/footer.php"); ?>