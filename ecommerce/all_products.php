<!DOCTYPE>
<?php 
include("Functions/functions.php");
?>
<html>
	<head>
		<title>This is the BAINARY House</title>
		<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	<body>
		<!--Main Container start here-->
	<div class="main_wrapper">
	
		<!--header start here-->
	    <div class="header_wrapper">
	 
		<a href="index.php"><img id="logo" src="images/logo edit.jpg"  /></a>
		<img id="banner" src="images/banner.jpg"  />
	</div>
	<!--header ends here-->
	
	<!--Navagation Bar starts-->
		<div class="menubar">
		
		<ul id="menu">
		<li> <a href="index.php">Home</a></li>
		<li> <a href="all_products.php">All products</a></li>
		<li> <a href="customer/my_account.php">My Account</a></li>
		<li> <a href="cart.php">Shopping cart</a></li>
		<li> <a href="facebook.com/maimunsayyed">Contact Us</a></li>
		
		</ul>
		
		<div id="form">
		<form method="get" action="results.php" enctype="multipart/form-data">
		  <input type="text" name="user_query" placeholder="search a Product" />
		  <input type="submit" name="search" value="Search" />
		</form>
		
		</div>
		
		
		</div>
	<!--Navagation Bar ends-->
	
	<!--content_wrapper start from here-->
	<div class="content_wrapper"> 
		<div style="float:right;height:810;background-color:red;"id="sidebar">
			<div id="sidebar_title">Catagory</div>
			<ul id="cats">
			<?php getCats();?>
			
			</ul>
			<div id="sidebar_title">Brands</div>
			<ul id="cats">
			<?php getBrands(); ?>
			
			</ul>
		
		
		</div>
	
		<div id="content_area">
		
			<div id="shopping_cart">
					
					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">Welcome Guest! <b style="color:yellow">Shopping cart -</b> Total Items: Total Price: <a href="cart.php" style="color:yellow">Go to cart</a>
					
					
					</span>
				
			</div>
		
		
			<div id="products_box">
	<?php
	$get_pro = "select * from products";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
			$pro_id = $row_pro['product_id'];
			$pro_cat = $row_pro['product_cat'];
			$pro_brand = $row_pro['product_brand'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			
			echo "
			
					<div id='single_product'>
					
					<h3>$pro_title</h3>
					<img src='admin_area/product_images/$pro_image' width='180' height='180' />
					
					<p><b> Price :- $pro_price </b></p>
					
					 <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					
					<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
					
					</div>
			
			";	
	}
	?>
			
		</div>
		
		</div>
		<!--content wrapper ends-->
		
		
	
	<div id="footer">
	
	<h2 style="text-align:center; padding-top:30px;">&copy; 2016 by www.SMR.com </h2>
	
	</div>
	
	</div>
	
	<!--Main Container ends  here-->
	</body>
</html>