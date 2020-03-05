<div class="col-xl-9 col-lg-8 col-md-7">
	<!-- Start Filter Bar -->
	<div class="filter-bar d-flex flex-wrap align-items-center">
		<div class="sorting">
			<select>
				<option value="1">Default sorting</option>
				<option value="1">Default sorting</option>
				<option value="1">Default sorting</option>
			</select>
		</div>
		<div class="sorting mr-auto">
			<select>
				<option value="1">Show 777</option>
				<option value="1">Show 888</option>
				<option value="1">Show 999</option>
			</select>
		</div>
		<div class="pagination">
			<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
			<a href="#" class="active">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
			<a href="#">6</a>
			<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End Filter Bar -->
	<!-- Start Best Seller -->
	<section class="lattest-product-area pb-40 category-list">
		<div class="row">
			<!-- single product -->
			<?php  
				$condition = "";
				if (isset($_GET["catid"])) {
					$catid = $_GET["catid"];
					$condition.= "WHERE cat_id =".$catid;
				}
				if (isset($_GET["brandid"])) {
					$brandid = $_GET["brandid"];
					$condition .= "WHERE brand_id =". $brandid;
				}
				if (isset($_GET["colorsid"])) {
					$colorsid = $_GET["colorsid"];
					$condition .= "WHERE colors_id =". $colorsid;
				}

				$sql = "SELECT * FROM `product` $condition";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
			?>
			<div class="col-lg-4 col-md-6">
				<div class="single-product">
					<a href="category.php?module=detailproduct&proid=<?php echo $row["pro_id"] ?>"><img class="img-fluid" src="<?php echo "backend/".$row["img"]; ?>" alt=""></a>
					<div class="product-details">
						<a href=""><h6><?php echo $row["pro_name"] ?></h6></a>
						<div class="price">
							<h6>$ <?php echo $row["price"]; ?></h6>
							<h6 class="l-through">$ <?php echo $row["sale_off"]; ?></h6>
						</div>
						<div class="prd-bottom">

							<a href="" class="social-info" onclick="addCart(<?php echo $row["pro_id"]; ?>);">
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
			<!-- <div class="col-lg-4 col-md-6">
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
			<div class="col-lg-4 col-md-6">
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
			<div class="col-lg-4 col-md-6">
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
			<div class="col-lg-4 col-md-6">
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
			<div class="col-lg-4 col-md-6">
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
			</div> -->
		</div>
	</section>
	<!-- End Best Seller -->
	<!-- Start Filter Bar -->
	<div class="filter-bar d-flex flex-wrap align-items-center">
		<div class="sorting mr-auto">
			<select>
				<option value="1">Show 12</option>
				<option value="1">Show 12</option>
				<option value="1">Show 12</option>
			</select>
		</div>
		<div class="pagination">
			<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
			<a href="#" class="active">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
			<a href="#">6</a>
			<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End Filter Bar -->
</div>