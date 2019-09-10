

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="<?= base_url('admin/dashboard'); ?>">Contact<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.html">kategori<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">iPhone<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Samsung<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Nokia<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Huawei<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
		

	<!-- Ads -->


	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						
						<!-- Product -->
						<?php foreach($samsung as $brg) : ?>
						<div class="product">
							<div class="product_image"><img src="<?= base_url('assets/') . $brg->image; ?>" alt=""></div>
							
							<div class="product_content">
								<div class="product_title"><a href="<?= base_url('chart/detail/'.$brg->id); ?>"><?= $brg->nama_merek; ?></a></div>
								<div class="product_price">Rp. <?= $brg->harga; ?>
									<div class="float-right">
										 <a href="<?= base_url('chart/beli/'.$brg->id); ?>"><span class="badge badge-secondary">Beli</span></a>	
									</div>
								</div>

							</div>
						</div>
					<?php endforeach; ?>

					</div>
						
				</div>
			</div>
		</div>
	</div>

	

	<!-- Icon Boxes -->

	
</div>
</div>

