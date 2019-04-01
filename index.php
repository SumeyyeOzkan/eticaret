<?php
//verilen pathlerdeki dosyalarımızı tasarım için ekledik
include 'ayarlar/baglanti.php';
include 'ayarlar/function.php';
include 'inc/header.php'
?>

<div role="main" class="main">
 <!-- ÜST BANNER   -->
  <?php
  include 'moduller/ust-banner.php'
  ?>

<!-- ÜST BANNER   -->


			<div class="container">
				<div class="row row-sm mb-lg">

                    <!-- SLİDER -->
                    <?php
                    include 'moduller/slider.php';
                    ?>
                    <!-- SLİDER -->

                    <!-- KATEGORİLER -->
                    <?php
                    include 'moduller/kategoriler.php';
                    ?>

                    <!-- KATEGORİLER -->


				</div>
				<div class="row row-sm">
                    <!-- ANASAYFA İÇ BÖLGE-->
					<div class="col-md-9 col-md-push-3">
						<div class="banners-container">
							<div class="row">
								<div class="col-sm-4">
									<a href="#" class="banner">
										<img src="img/demos/shop/banners/shop6/banner1.jpg" alt="Banner">
									</a>
								</div>
								<div class="col-sm-4">
									<a href="#" class="banner">
										<img src="img/demos/shop/banners/shop6/banner2.jpg" alt="Banner">
									</a>
								</div>

								<div class="col-sm-4">
									<a href="#" class="banner">
										<img src="img/demos/shop/banners/shop6/banner3.jpg" alt="Banner">
									</a>
								</div>
							</div>
						</div>

						<h2 class="slider-title">
		                    <span class="inline-title">FEATURED FASHION DRESS</span>
		                    <span class="line"></span>
		                </h2>

		                <div class="owl-carousel owl-theme manual featured-products-carousel">
							<div class="product">
								<figure class="product-image-area">
									<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
										<img src="img/demos/shop/products/product1.jpg" alt="Product Name">
										<img src="img/demos/shop/products/product1-2.jpg" alt="Product Name" class="product-hover-image">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
									<div class="product-label"><span class="discount">-10%</span></div>
									<div class="product-label"><span class="new">New</span></div>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Noa Sheer Blouse</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:60%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="old-price">$99.00</span>
										<span class="product-price">$89.00</span>
									</div>

									<div class="product-actions">
										<a href="#" class="addtowishlist" title="Add to Wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="#" class="addtocart" title="Add to Cart">
											<i class="fa fa-shopping-cart"></i>
											<span>Add to Cart</span>
										</a>
										<a href="#" class="comparelink" title="Add to Compare">
											<i class="glyphicon glyphicon-signal"></i>
										</a>
									</div>
								</div>
							</div>

							<div class="product">
								<figure class="product-image-area">
									<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
										<img src="img/demos/shop/products/product2.jpg" alt="Product Name">
										<img src="img/demos/shop/products/product2-2.jpg" alt="Product Name" class="product-hover-image">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
									<div class="product-label"><span class="discount">-25%</span></div>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Women Fashion Blouse</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:0%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="old-price">$120.00</span>
										<span class="product-price">$90.00</span>
									</div>

									<div class="product-actions">
										<a href="#" class="addtowishlist" title="Add to Wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="#" class="addtocart" title="Add to Cart">
											<i class="fa fa-shopping-cart"></i>
											<span>Add to Cart</span>
										</a>
										<a href="#" class="comparelink" title="Add to Compare">
											<i class="glyphicon glyphicon-signal"></i>
										</a>
									</div>
								</div>
							</div>

							<div class="product">
								<figure class="product-image-area">
									<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
										<img src="img/demos/shop/products/product3.jpg" alt="Product Name">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Fashion Dress</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:60%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="product-price">$70.00</span>
									</div>

									<div class="product-actions">
										<a href="#" class="addtowishlist" title="Add to Wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="#" class="addtocart" title="Add to Cart">
											<i class="fa fa-shopping-cart"></i>
											<span>Add to Cart</span>
										</a>
										<a href="#" class="comparelink" title="Add to Compare">
											<i class="glyphicon glyphicon-signal"></i>
										</a>
									</div>
								</div>
							</div>

							<div class="product">
								<figure class="product-image-area">
									<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
										<img src="img/demos/shop/products/product4.jpg" alt="Product Name">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
									<div class="product-label"><span class="discount">-20%</span></div>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Fashion Sweater</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:80%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="old-price">$100.00</span>
										<span class="product-price">$90.00</span>
									</div>

									<div class="product-actions">
										<a href="#" class="addtowishlist" title="Add to Wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="#" class="addtocart" title="Add to Cart">
											<i class="fa fa-shopping-cart"></i>
											<span>Add to Cart</span>
										</a>
										<a href="#" class="comparelink" title="Add to Compare">
											<i class="glyphicon glyphicon-signal"></i>
										</a>
									</div>
								</div>
							</div>

							<div class="product">
								<figure class="product-image-area">
									<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
										<img src="img/demos/shop/products/product11.jpg" alt="Product Name">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Woman Shee Blouse</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:0%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="product-price">$70.00</span>
									</div>

									<div class="product-actions">
										<a href="#" class="addtowishlist" title="Add to Wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="#" class="addtocart" title="Add to Cart">
											<i class="fa fa-shopping-cart"></i>
											<span>Add to Cart</span>
										</a>
										<a href="#" class="comparelink" title="Add to Compare">
											<i class="glyphicon glyphicon-signal"></i>
										</a>
									</div>
								</div>
							</div>

							<div class="product">
								<figure class="product-image-area">
									<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
										<img src="img/demos/shop/products/product9.jpg" alt="Product Name">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
									<div class="product-label"><span class="new">New</span></div>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Pink Woman Shirt</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:80%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="product-price">$80.00</span>
									</div>

									<div class="product-actions">
										<a href="#" class="addtowishlist" title="Add to Wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="#" class="addtocart" title="Add to Cart">
											<i class="fa fa-shopping-cart"></i>
											<span>Add to Cart</span>
										</a>
										<a href="#" class="comparelink" title="Add to Compare">
											<i class="glyphicon glyphicon-signal"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<hr class="mt-xlg mb-xl">

						<div class="row mb-sm">
							<div class="col-sm-4">
								<div class="products-column">
									<h3 class="h4 text-uppercase mb-sm"><strong>NEW</strong></h3>
									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
												<img src="img/demos/shop/products/shop9/product11.jpg" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Diamond Ring - S</a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:0%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">$220.00</span>
											</div>
										</div>
									</div>

									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
												<img src="img/demos/shop/products/shop9/product12.jpg" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Diamond Ring - XL</a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:80%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">$180.00</span>
											</div>
										</div>
									</div>

									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
												<img src="img/demos/shop/products/shop9/product13.jpg" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Diamond Ring - 2XL</a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:0%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">$240.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="products-column">
									<h3 class="h4 text-uppercase mb-sm"><strong>HOT</strong></h3>
									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
												<img src="img/demos/shop/products/shop9/product10.jpg" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Men Sports Watch-Black</a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:0%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">$220.00</span>
											</div>
										</div>
									</div>

									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
												<img src="img/demos/shop/products/shop9/product8.jpg" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Men Sports Watch</a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:80%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">$180.00</span>
											</div>
										</div>
									</div>

									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
												<img src="img/demos/shop/products/shop9/product9.jpg" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Men Sports Watch-XL</a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:0%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">$240.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="products-column">
									<h3 class="h4 text-uppercase mb-sm"><strong>SALE</strong></h3>
									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
												<img src="img/demos/shop/products/shop9/product12.jpg" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Diamond Ring - S</a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:0%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">$220.00</span>
											</div>
										</div>
									</div>

									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
												<img src="img/demos/shop/products/shop9/product13.jpg" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Diamond Ring - XL</a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:80%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">$180.00</span>
											</div>
										</div>
									</div>

									<div class="product product-sm">
										<figure class="product-image-area">
											<a href="shop/demo-shop-6-product-details.html" title="Product Name" class="product-image">
												<img src="img/demos/shop/products/shop9/product11.jpg" alt="Product Name">
											</a>
										</figure>
										<div class="product-details-area">
											<h2 class="product-name"><a href="shop/demo-shop-6-product-details.html" title="Product Name">Diamond Ring - 2XL</a></h2>
											<div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:0%"></div>
												</div>
											</div>

											<div class="product-price-box">
												<span class="product-price">$240.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="customer-support-section">
							<h2 class="slider-title text-center mb-xl">
								<span class="inline-title">WHY SHOP WITH US</span>
								<span class="line"></span>
							</h2>
							<div class="row">
								<div class="col-sm-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-star"></i>
										</div>
										<h4>DEDICATED SERVICE</h4>
										<p>Consult our specialists for help with an order, customization, or design advice.</p>
										<a href="#">Get in Touch ></a>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-mail-reply"></i>
										</div>
										<h4>FREE RETURNS</h4>
										<p>We stand behind our goods and services and want you to be satisfied with them.</p>
										<a href="#">Get in Touch ></a>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-paper-plane"></i>
										</div>
										<h4>INTERNATIONAL SHIPPING</h4>
										<p>Currently over 50 countries qualify for express international shipping.</p>
										<a href="#">Get in Touch ></a>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- ANASAYFA İÇ BÖLGE-->

					<!-- ANASAYFA ALT SIDEBAR-->
                    <?php
                    include 'moduller/alt-sidebar.php';
                    ?>
                    <!-- ANASAYFA ALT SIDEBAR-->
				</div>
			</div>
			<!--POPUP -->

            <!--POPUP -->


			</div>

<?php include 'inc/footer.php'; ?>

