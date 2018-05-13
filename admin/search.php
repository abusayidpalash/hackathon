<?php
	require_once("inc/header.php");
	require_once("inc/navbar.php");

	/*$_GET['search'] is available*/
	if (!isset($_GET['search'])) {
		redirect("404.php");
	}
?>
<div class="container padding-10">
	<div id="search-container">
		<div class='row'>
		<?php
			if (!empty($_GET['search'])) {
				/*code for search*/
				$search = escape($_GET['search']);
				/*search term must be greater then 2 char*/
				if (strlen($search) < 3) {
					echo "<h1 class='text-center text-red'>Search term should be more then 2 characters long</h1>";
					exit();
				}

				$search_term = explode(" ", $search);
				$term_count = 0;
				$q = "SELECT * FROM `product` WHERE ";

				foreach ($search_term as $key => $term) {
					$term_count++;
					if ($term_count == 1) {
						$q .= "`tags` LIKE '%$term%' ";
					}else{
						$q .= "AND `tags` LIKE '%$term%' ";
					}
				}

				/*exe the query*/
				$result_q = $db->Query($q);
				$result_num = mysqli_num_rows($result_q);
				if ($result_num > 0) {
					/*fetch the results*/
					echo "<h2 class='text-center text-bs-primary'>`<span class='text-black'>{$result_num}</span>` Result Found</h2>";
					
					while ($product = mysqli_fetch_assoc($result_q)) {
						?>
					<div class="table-responsive">
					<table class="table table-bordered table-striped table-condensed">
						<div class="col-sm-4 col-md-4">
							<th>Image</th>
							<th>Name</th>
							<th>Age</th>
							<th>Sex</th>
							<tr>
							<?php
								echo "
								<td><img src='../{$product['image']}' width='100'></td>
								<td>{$product['name']}</td>
								<td>{$product['shipping']}</td>
				                <td>{$product['category_id']}</td>
							
							<tr>
							";
						}
							?>
						</div>
						</table>
						</div>
						
				
						
						
						<?php
					
				}else{
					echo "<h1 class='text-center text-red'>No results found for `<span class='text-black'>{$search}</span>`</h1>";
				}
			}else{
				echo "<h1 class='text-center text-bs-primary'>Sorry! No Search Term Given</h1>";
			}
		?>
		</div> <!-- / ROW -->
	</div><!-- / SEARCH CONTAINER -->
</div>	
