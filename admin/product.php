<?php
	require_once("inc/header.php");
	require_once("inc/navbar.php");
	// if admin is not login send him to login.php
	not_login($_SESSION['admin_id'], "login.php");
?>
<div class="container padding-10">
	<div id="search-container">
		<h1 class="text-center text-bs-primary text-upper">All Information</h1>
		<div class="table-responsive">
		<table class="table table-bordered table-striped table-condensed">
			
			<th>Image</th>
			<th>Name</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Father's Name</th>
			<th>Birthplace</th>
			<th>Nationality</th>
			<th>Religion</th>
			<th>Health condition</th>
			<th>Edit</th>
			<th>Delete</th>
			<tr>
		<?php
			// fetch the list of products
			$products = $db->Query("
					SELECT * FROM product 
					
					");
			
			foreach ($products as $key => $product) {
				echo "
				
				
				<td><img src='../{$product['image']}' width='100'></td>
				<td>{$product['name']}</td>
				<td>{$product['shipping']}</td>
				<td>{$product['category_id']}</td>
				<td>{$product['description']}</td>
				<td>{$product['mp']}</td>
				<td>{$product['sp']}</td>
				<td>{$product['off']}</td>
				
				<td>{$product['tags']}</td>
				
				<td><a href='edit_product.php?id={$product['id']}'>Edit</a></td>
				<td><a href='delete_product.php?id={$product['id']}'>Delete</a></td>
			
				<tr>
				";
			}
		?>
		</table>
		</div>
	</div>
