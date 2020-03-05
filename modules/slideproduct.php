<?php  
	include('connectionpro.php');
?>
<section class="owl-carousel active-product-area section_gap">
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Latest Products</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single product -->
				<?php  
					$sql = "SELECT * FROM `product`";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    while($row = mysqli_fetch_assoc($result)) {

				?>
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<a href="category.php?module=detailproduct&proid=<?php echo $row["pro_id"] ?>"><img class="img-fluid" src="<?php echo "backend/".$row["img"]; ?>" alt=""></a>
						<div class="product-details">
							<a href="category.php?module=detailproduct&proid=<?php echo $row["pro_id"] ?>"><h6><?php echo $row["pro_name"]; ?></h6></a>
							<div class="price">
								<h6>$ <?php echo $row["price"]; ?></h6>
								<h6 class="l-through">$ <?php echo $row["sale_off"]; ?></h6>
							</div>
							<div class="prd-bottom">

								<a href="" class="social-info" onclick="addCart(<?php echo $row["pro_id"]; ?>)">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="category.php?module=detailproduct&proid=<?php echo $row["pro_id"] ?>" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php }
			} ?>
				<!-- single product -->
				<!-- <div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p2.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p3.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p4.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p5.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p6.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p7.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p8.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Coming Products</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single product -->
				<?php  
					$sql = "SELECT * FROM `product`";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    while($row = mysqli_fetch_assoc($result)) {

				?>
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<a href="category.php?module=detailproduct&proid=<?php echo $row["pro_id"] ?>"><img class="img-fluid" src="<?php echo "backend/".$row["img"]; ?>" alt=""></a>
						<div class="product-details">
							<a href="category.php?module=detailproduct&proid=<?php echo $row["pro_id"] ?>"><h6><?php echo $row["pro_name"]; ?></h6></a>
							<div class="price">
								<h6>$ <?php echo $row["price"]; ?></h6>
								<h6 class="l-through">$ <?php echo $row["sale_off"]; ?></h6>
							</div>
							<div class="prd-bottom">

								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="category.php?module=detailproduct&proid=<?php echo $row["pro_id"] ?>" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php }
			} ?>
				<!-- single product -->
				<!-- <div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p8.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p3.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p5.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p1.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p4.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p1.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				single product
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="img/product/p8.jpg" alt="">
						<div class="product-details">
							<h6>addidas New Hammer sole
								for Sports person</h6>
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<div class="prd-bottom">
				
								<a href="" class="social-info">
									<span class="ti-bag"></span>
									<p class="hover-text">add to bag</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-heart"></span>
									<p class="hover-text">Wishlist</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-sync"></span>
									<p class="hover-text">compare</p>
								</a>
								<a href="" class="social-info">
									<span class="lnr lnr-move"></span>
									<p class="hover-text">view more</p>
								</a>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</section>