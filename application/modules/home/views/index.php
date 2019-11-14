
								<?php // echo "<pre>";var_dump($products->result()); echo "</pre>"; ?>
	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="inf-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
								<span>Big</span>
								Sale
							</h3>
							<a class="button2" href="<?php echo base_url(); ?>#products">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="inf-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p><span>Plastic</span> bags</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
								<span>bags in town</span>
							</h3>
							<a class="button2" href="<?php echo base_url(); ?>#products">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->
	<!---728x90--->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-12">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Products</h3>

							<div class="row" id="products">
								<?php if($products->num_rows() > 0){
									foreach($products->result() as $product) { ?>
								<div class="col-md-3 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="<?php echo $product->fl_loc_tmb; ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?php echo base_url('products/'.$product->prd_id) ?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="<?php echo base_url('products/'.$product->prd_id) ?>"><?php echo $product->prd_00_nm; ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo $product->prd_00_prc; ?></span>
												<del><?php echo $product->prd_old_prc>0 ? $product->prd_old_prc:''; ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="item_name" value="<?php echo $product->prd_00_nm; ?>" />
														<input type="hidden" name="amount" value="<?php echo $product->prd_00_prc; ?>" />
														<input type="hidden" name="currency_code" value="<?php echo $product->prd_prc_curr; ?>" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
								<?php 
									}
								}
								 ?>
							</div>
						</div>
						<!-- //first section -->
					</div>
				</div>
				<!-- //product left -->

				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->
	<!---728x90--->
