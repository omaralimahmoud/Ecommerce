  <?php include ("inc/header.php")  ;  ?>
	<?php
	use  TechStore\classes\MODELS\prodect; 
	if($reqest->getHas('id'))
	{
	   $id=$reqest->get('id');
	}else
	{
		$id=1;
	}
	$pr=new prodect;
	$prod=$pr->selectId($id,"products.id AS prodID,products.name As prodName, price,`desc`,img,cats.name AS catName");
	
	?>
	
	
	
	
	
	
	
	
	<!-- Single Product -->
   <?php if (!empty($prod)) :?>
	<div class="single_product">
		<div class="container">
			<div class="row">

				

				<!-- Selected Image -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="image_selected"><img src=" <?= URL . "upload/". $prod['img'] ?>" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-6 order-3">
					<div class="product_description">
						<div class="product_category"><?= $prod['catName']?> </div>
						<div class="product_name"><?= $prod['prodName']; ?></div>
						<div class="product_text"><p><?= $prod['desc'] ?></p></div>
						<div class="order_info d-flex flex-row">
							<form method="POST" action="<?= URL;?>handler/addtoCart.php">
								<div class="clearfix" style="z-index: 1000;">
                                       <input type="hidden" name="id" value="<?=$prod['prodID'];?>">
									   <input type="hidden" name="name" value="<?=  $prod['prodName'];?>">
									   <input type="hidden" name="img" value="<?= $prod['img'];?>">
									   <input type="hidden" name="price" value="<?=$prod['price'] ;?>">

									    
									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="number" name="qty" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

                                    <div class="product_price">$<?= $prod['price']   ?></div>

								</div>
                                      <?php if(!$cart->has($prod['prodID'])):?>
								<div class="button_container">
									<button type="submit" name="submit" class="button cart_button">Add to Cart</button>
								</div>
								<?php endif;  ?>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

       <?php else: ?>
	   <div class="single_product text-center" style="height: 500px;">
	   <h1 style="color: red;"> NO DATA FOUND  </h1>
	   <a style="color:gray ;"  style="font-size: 16rem;" href="product.php" class="text-center"><h1>BACK</h1> <span style="font-size: 12rem;"  ><i class="fas fa-hand-point-left"></i></span> </a>
	   </div>
	  <?php endif;   ?>
<?php include ("inc/footer.php"); ?>
	