<!-- Home -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/'); ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/'); ?>styles/responsive.css">

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/'); ?>images/laptop.jpg"></div>
    <div class="home_overlay"></div>
    <div class="home_content d-flex flex-column align-items-center justify-content-center">
        <h2 class="home_title">All Products</h2>
    </div>
</div>

<!-- Shop -->

<div class="shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- Shop Sidebar -->
                <div class="shop_sidebar">
                    <div class="sidebar_section">
                        <div class="sidebar_title">Categories</div>
                        <ul class="sidebar_categories">
                            <li>
                                <a href="<?= base_url('home/all_products'); ?>">All Products</a>
                            </li>
                            <?php
                            foreach ($kategori_produk as $kategori) {
                            ?>
                                <li>
                                    <a href="<?= base_url('home/all_products/') . $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="col-lg-9">

                <!-- Shop Content -->

                <div class="shop_content">
                    <div class="shop_bar clearfix">
                        <div class="shop_product_count"><span></span> Daftar Produk</div>
                        <div class="shop_sorting">
                            <!-- <span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul> -->
                        </div>
                    </div>

                    <div class="product_grid">
                        <div class="product_grid_border"></div>

                        <div class="product_panel panel active">
                            <div class="featured_slider slider">
                                <!-- Slider Item -->
                                <?php foreach ($produk as $produk) { ?>
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <object data="<?php echo base_url(); ?>assets/img/upload/<?= $produk['image'] ?>" type="image/png" style="width : 100px;">
                                                    <img src="<?php echo base_url(); ?>assets/images/image_404.jpeg" alt="default" style="width : 100px;">
                                                </object>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_price discount">Rp. <?= number_format($produk['harga'], 2) ?></div>
                                                <div class="product_name">
                                                    <div><a href="<?= base_url('produk/detail/') . $produk['id_produk']; ?>"><?= $produk['nama_produk'] ?></a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <!-- <li class="product_mark product_discount">-25%</li> -->
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>