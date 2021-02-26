<?php 
session_start();
$_SESSION['cart'] = 0;
session_unset();
session_destroy();


?>


<!DOCTYPE html>
<html>

<head>
	<title>Mega Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="css/font-awesome.css">-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<!-- header start <img src=".../IMG/Logo.png"/>-->
	<header class="header">
		<div class="container">
			<div class="row v-center">
				<div class="header-item item-left">
					<div class="logo">
						<a href="index.php"><img height="120px" src="./IMG/logo/Logo.png"></a>
					</div>
				</div>
				<!-- menu start here -->
				<div class="header-item item-center">
					<div class="menu-overlay">
					</div>
					<nav class="menu">
						<div class="mobile-menu-head">
							<div class="go-back"></div>
							<div class="current-menu-title"></div>
							<div class="mobile-menu-close">&times;</div>
						</div>
						<ul class="menu-main">
							<li>
								<a href="#">Home</a>
							</li>
							<li class="menu-item-has-children">
								<a href="#">New <i class="fa fa-angle-down"></i></a>
								<div class="sub-menu mega-menu mega-menu-column-4">
									<div class="list-item text-center">
										<a href="#">
											<img src="./IMG/Ropa/p1.jpg" alt="new Product">
											<h4 class="title">Product 1</h4>
										</a>
									</div>
									<div class="list-item text-center">
										<a href="#">
											<img src="./IMG/Ropa/p2.jpg" alt="new Product">
											<h4 class="title">Product 2</h4>
										</a>
									</div>
									<div class="list-item text-center">
										<a href="#">
											<img src="./IMG/Ropa/p3.jpg" alt="new Product">
											<h4 class="title">Product 3</h4>
										</a>
									</div>
									<div class="list-item text-center">
										<a href="#">
											<img src="./IMG/Ropa/p4.jpg" alt="new Product">
											<h4 class="title">Product 4</h4>
										</a>
									</div>
								</div>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Shop</a>
								<div class="sub-menu mega-menu mega-menu-column-4">
									<div class="list-item">
										<h4 class="title">Men's Fashion</h4>
										<ul>
											<li><a href="/PROYECTO/Pagina_Productos/Productos.php?ID=1">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
										</ul>
										<h4 class="title">Beauty</h4>
										<ul>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
										</ul>
									</div>
									<div class="list-item">
										<h4 class="title">Women's Fashion</h4>
										<ul>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
										</ul>
										<h4 class="title">Furniture</h4>
										<ul>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
										</ul>
									</div>
									<div class="list-item">
										<h4 class="title">Home, Kitchen</h4>
										<ul>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
										</ul>
									</div>
									<div class="list-item">
										<img src="./IMG/Ropa/shop1.jpg" alt="shop">
									</div>
								</div>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Blog</a>
								<div class="sub-menu single-column-menu">
									<ul>
										<li><a href="#">Standard Layout</a></li>
										<li><a href="#">Grid Layout</a></li>
										<li><a href="#">single Post Layout</a></li>
									</ul>
								</div>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Pages</a>
								<div class="sub-menu single-column-menu">
									<ul>
										<li><a href="#">Login</a></li>
										<li><a href="#">Register</a></li>
										<li><a href="#">Faq</a></li>
										<li><a href="#">404 Page</a></li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- menu end here -->
			
				<div class="header-item item-right">
					<?php
					if (isset($_SESSION['cart'])) {
						echo "<p class='User'>Bienvenido!, alberto</p>";
					} else { ?>
						<a href="/Proyecto/Paginas/Login.php"><img class="item" src="./IMG/icon/user.png" /></a>
					<?php } ?>
					<a href="/Proyecto/Paginas/Cesta.php"><img class="item" src="./IMG/icon/carrito-de-compras.png" /></a>
					<!-- mobile menu trigger -->
					<div class="mobile-menu-trigger">
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->


	<!-- banner start -->
	<section class="banner-section">

	</section>
	<!-- banner end -->

	<script src="js/script.js"></script>
</body>

</html>