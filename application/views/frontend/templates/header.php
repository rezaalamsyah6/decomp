<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $judul; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OneTech shop project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/'); ?>styles/bootstrap4/bootstrap.min.css">
	<link href="<?= base_url('assets/frontend/'); ?>plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/'); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/'); ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/'); ?>plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/'); ?>plugins/slick-1.8.0/slick.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/'); ?>styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/'); ?>styles/responsive.css">


</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="top_bar_content ml-auto">
								<div class="top_bar_menu">
								</div>
								<div class="top_bar_user">

									<?php if ($this->session->userdata('email')) { ?>

										<ul class="standard_dropdown top_bar_dropdown">
											<li>
												<a href="#">
													<img src="<?= base_url('assets/img/upload/') . $user['image'];  ?>" class="rounded-circle img-thumbnail" width="80" alt="">

													<i class="fas fa-chevron-down"></i>
												</a>

												<ul>
													<li><a><?= $user['name']; ?></a></li>
													<li><a href="<?= base_url('home/profile'); ?>">Profile</a></li>
													<li><a href="<?= base_url('public/checkouts/'); ?>">Transcation History</a></li>
													<li><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
												</ul>
											</li>
										</ul>

									<?php } else { ?>

										<div class="user_icon"><img src="<?= base_url('assets/frontend/'); ?>images/user.svg" alt=""></div>
										<div><a href="<?= base_url('auth/registration'); ?>">Register</a></div>
										<div><a href="<?= base_url('auth'); ?>">Sign in</a></div>

									<?php } ?>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Main -->

			<div class="header_main">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<div class="col-lg-2 col-sm-3 col-3 order-1">
							<div class="logo_container">
								<div class="logo"><a href="#">DeComp</a></div>
							</div>
						</div>

						<!-- Search -->
						<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form action="#" class="header_search_form clearfix">
											<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
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
											<button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?= base_url('assets/'); ?>images/search.png" alt=""></button>
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
											<img src="<?= base_url('assets/frontend/'); ?>" alt="">
											<div class="cart_count"><span>10</span></div>
										</div>
										<div class="cart_content">
											<div class="cart_text"><a href="#">Cart</a></div>
											<div class="cart_price">$85</div>
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
										<?php foreach ($kategori_produk as $kategori) : ?>
											<li><a href="#"><?= $kategori['nama_kategori'] ?><i class="fas fa-chevron-right ml-auto"></i></a></li>
										<?php endforeach; ?>
									</ul>
								</div>

								<!-- Main Nav Menu -->

								<div class="main_nav_menu ml-auto">
									<ul class="standard_dropdown main_nav_dropdown">
										<li><a href="<?= base_url('home') ?>">Home<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="<?= base_url('home/home_servis') ?>">Servis<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="<?= base_url('home/all_products') ?>">All Products<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</div>

								<!-- Menu Trigger -->

								<div class="menu_trigger_container ml-auto">
									<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
										<div class="menu_burger">
											<div class="menu_trigger_text">menu</div>
											<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</nav>

			<!-- Menu -->

			<div class="page_menu">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="page_menu_content">

								<div class="page_menu_search">
									<form action="#">
										<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
									</form>
								</div>
								<ul class="page_menu_nav">
									<li class="page_menu_item has-children">
										<a href="#">Language<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Currency<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item">
										<a href="#">Home<i class="fa fa-angle-down"></i></a>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
											<li class="page_menu_item has-children">
												<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
												<ul class="page_menu_selection">
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
									<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
								</ul>

								<div class="menu_contact">
									<div class="menu_contact_item">
										<div class="menu_contact_icon"><img src="<?= base_url('assets/frontend/'); ?>images/phone_white.png" alt=""></div>+38 068 005 3570
									</div>
									<div class="menu_contact_item">
										<div class="menu_contact_icon"><img src="<?= base_url('assets/frontend/'); ?>images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>