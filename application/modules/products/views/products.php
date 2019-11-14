
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
									foreach($products->result() as $product) {
										 $currency = json_decode( $product->lov_opt );  ?>
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
												<span class="item_price"><?php echo $currency->html.number_format($product->prd_00_prc,2); ?></span>
												<del><?php echo $product->prd_old_prc>0 ? ($currency->html.number_format($product->prd_old_prc,2)):''; ?></del>
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