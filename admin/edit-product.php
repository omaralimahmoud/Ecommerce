<?php include("inc/header.php"); ?>
  <?php
  use  TechStore\classes\MODELS\prodect;
  use TechStore\classes\MODELS\Cats;
  $c= new Cats;
  $catss=$c->select("id,name");
  $pr = new prodect;
   if ($reqest->getHas('id')) {
       $id= $reqest->get('id');
   }else
   {
       $id=1;
   }
 $prod= $pr->selectId($id,"products.id AS prodId, products.name AS prodName,cats.name AS catName, img, picess_no,price,`desc`,cat_id")
 
  ?>

    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Edit Product : <?= $prod['prodName'];?></h3>
                <div class="card">
                    <div class="card-body p-5">
                        <form method="POST" action="<?= AURL ."handelr/edit-product.php"?> " enctype="multipart/form-data">
                            
                        
                            <div class="form-group">
                              <label>Name</label>
                              <input  type="text"name="name" value="<?=$prod['prodName'];?>" class="form-control">
                            </div>
                               <input type="hidden" name="id" value="<?=$prod['prodId']?>">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control name" name="cat_id">
                                <?php foreach ($catss as  $catt) :?>
                                    <option value="<?=$catt['id'] ;?>"<?php if($catt['id']==$prod['cat_id']) {echo 'selected';} ?>><?=$catt['name'];?></option>
                                 <?php endforeach; ?>
                                  
                                </select>
                            </div>
                            

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" value="<?=$prod['price']?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Pieces</label>
                                <input type="number" name="picess_no" value="<?=$prod['picess_no']?>" class="form-control">
                            </div>
  
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"  name="desc"  rows="3"><?= $prod['desc'];?></textarea>
                            </div>
                           
                           <div class="d-flex justify-content-center align-items-center mb-2">
                           <img src="<?= URL . "upload/" . $prod['img'];?>" height="100px" alt="">
                           </div>
                            
                            <div class="custom-file">
                                <input type="file" name="img"   class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose Image</label>
                            </div>
                              
                            <div class="text-center mt-5">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-dark" href="#">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include("inc/footer.php"); ?>