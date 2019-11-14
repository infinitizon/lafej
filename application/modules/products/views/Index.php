
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2"> 
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<?php foreach($files->result() as $file) { ?>
								<li data-thumb="<?php echo $file->fl_00_loc; ?>">
									<div class="thumb-image">
										<img src="<?php echo $file->fl_loc_tmb; ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<?php } ?>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<?php $currency = json_decode( $product->lov_opt );  ?>
				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $product->prd_00_nm;  ?></h3>
					<p class="mb-3">
						<span class="item_price"><?php echo $currency->html.number_format($product->prd_00_prc,2); ?></span>
						<del class="mx-2 font-weight-light"><?php echo $product->prd_old_prc>0 ? ($currency->html.number_format($product->prd_old_prc,2)):''; ?></del>
						<label>Free delivery</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								Cash on Delivery Eligible.
							</li>
							<li class="mb-3">
								Shipping Speed to Delivery.
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<?php echo $product->prd_00_dsc; ?>
							<!-- <label>1 Year</label>Manufacturer Warranty</p> -->
						<ul>
							<!-- <li class="mb-1">
								3 GB RAM | 16 GB ROM | Expandable Upto 256 GB
							</li>
							<li class="mb-1">
								5.5 inch Full HD Display
							</li>
							<li class="mb-1">
								13MP Rear Camera | 8MP Front Camera
							</li>
							<li class="mb-1">
								3300 mAh Battery
							</li>
							<li class="mb-1">
								Exynos 7870 Octa Core 1.6GHz Processor
							</li> -->
							<!-- <li></li> -->
						</ul>
						<p class="my-sm-4 my-3">
							<i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
						</p>
					</div>
					<div class="occasion-cart">
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
		</div>
	</div>