<?php require_once ("app.php"); ?>
<?php
use  TechStore\classes\MODELS\Cats;
use TechStore\classes\CArt;
  $c= new Cats;
  $cats1=  $c->select("id, name");
  $cart= new CArt;
  $cartCount= $cart->countt();
  $catTotal=$cart->Totel();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TechStore</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="TechStore">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/bootstrap4/bootstrap.min.css">
<link href=" <?=URL;?>assts/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/main_styles.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/responsive.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/shop_styles.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/shop_responsive.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/product_styles.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/product_responsive.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/cart_styles.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/cart_responsive.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/contact_styles.css">
<link rel="stylesheet" type="text/css" href=" <?=URL;?>assts/css/contact_responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="<?= URL;?>">Techstore</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form method="$_GET" action="<?= URL;?>search.php " class="header_search_form clearfix">
										<input type="search" required="required" name="keyWord" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?= URL;?>assts/images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="assts/images/cart.png" alt="">
										<div class="cart_count"><span> <?=$cartCount;?></span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="<?=URL;?>cart.php">Cart</a></div>
										<div class="cart_price">$<?=$catTotal;?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
								  <?php foreach ($cats1 as $cat) : ?>
									<li><a href="category.php?id= <?= $cat['id'] ;?>"> <?=$cat ['name'] ; ?> <i class="fas fa-chevron-right ml-auto"></i></a></li>
								
									<?php  endforeach ?>
									
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="<?= URL;?>">Home<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="<?= URL;?>products.php">All products<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="<?= URL ;?>cart.php">Cart<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
	
	</header>
	