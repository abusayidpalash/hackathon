<?php
	require_once("inc/header.php");
	require_once("inc/navbar.php");
	require_once("../classes/Upload.php");
	// if admin is not login send him to login.php
	not_login($_SESSION['admin_id'], "login.php");
?>
<div class="container padding-10">
	<div id="search-container">
		<h1 class="text-center text-bs-primary text-upper">registration</h1>
		<?php
			// when form is submited
			if (isset($_POST['add']) && isset($_FILES['pimage'])) {
				// create all the variables for the form
				$name = escape($_POST['pname']);
				$desc = escape($_POST['fname']);
				$mp = escape($_POST['bname']);
				$sp = escape($_POST['nname']);
				$off = escape($_POST['rname']);
				$shipping = escape($_POST['ag']);
				$tags = escape($_POST['ptags']);
				$category = escape($_POST['gender']);
				//$cat = escape($_POST['gender']);
				$image = $_FILES['pimage']['name'];

				// process to check all the fields are filled or not
				$isEmptyArray = array();
				foreach ($_POST as $key => $post) {
					$post = trim($post);
					if ($post == "") {
						$isEmptyArray[$key] = "isEmpty";
					}else{
						$isEmptyArray[$key] = "notEmpty";
					}
				}				
				// check array has the isEmpty keyword
				if (in_array("isEmpty", $isEmptyArray)) {
					echo "<div class='alert alert-danger'>Fill in all the fields</div>";
				}else{
					// add product
					// check $_FILES IS SELECTED
					if (!empty($_FILES['pimage']['name'])) {
						// upload the image n add product
						$allowedImage = array("jpg","png","jpeg");
						$dir = md5(rand().random_password());
						mkdir("../images/{$dir}/");
						$upload = new Upload($_FILES['pimage'],"../images/{$dir}/",2000000,$allowedImage);
						// check for results
						$results = $upload->GetResult();

						// if image is uploaded and the result is success add the product to the db
						if ($results['type'] == "success") {
							
							$insert = $db->Insert("product", "'','$category','$name','images/{$dir}/$image','$desc','$mp','$sp','$off','$shipping','$tags'");

							if($insert){
								echo "<div class='alert alert-success'>Product has been added <a href='product.php'>GO BACK</a></div>";
								exit();
							}else{
								echo "<div class='alert alert-danger'>Unable to Insert Product Try again</div>";
							}
						}else{
							echo "<div class='alert alert-danger'>{$result['message']}</div>";
						}
					}else{
						echo "<div class='alert alert-danger'>Select an image for product</div>";
					}
				}
			}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="pname">Name</label>
				<input type="text" class="form-control" id="pname" name="pname" placeholder="Enter your name"  value="<?php echo @$name; ?>">
			</div>

			<div class="form-group">
				<label for="pname">Father's Name</label>
				<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Father's Name"  value="<?php echo @$name; ?>">
			</div>

			<div class="form-group">
				<label for="pname">Birthplace</label>
				<input type="text" class="form-control" id="bname" name="bname" placeholder="Enter Birthplace"  value="<?php echo @$name; ?>">
			</div>

			<div class="form-group">
				<label for="pname">Nationality</label>
				<input type="text" class="form-control" id="nname" name="nname" placeholder="Enter Nationality"  value="<?php echo @$name; ?>">
			</div>

			<div class="form-group">
				<label for="pname">Religion</label>
				<input type="text" class="form-control" id="rname" name="rname" placeholder="Enter Religion"  value="<?php echo @$name; ?>">
			</div>

			<div class="form-group">
				<label for="pname">Age</label>
				<input type="number" class="form-control" id="ag" name="ag" placeholder="Enter Age"  value="<?php echo @$name; ?>">
			</div>

			<div class="form-group">
				<label for="pname">Sex</label>
				<br>
				<input type="radio" name="gender"  id="gender" value="male"<?php if(isset($gender) && $gender = 'male') echo 'cheked="cheked"';?>>
				<lebel for="psw">Male</lebel>
				<input type="radio" name="gender"  id="gender"  value="female"<?php if(isset($gender) && $gender = 'female') echo 'cheked="cheked"';?>>
				<lebel for="psw">Female</lebel>
			</div>

			<div class="form-group">
				<label for="pimage"> Image</label>
				<input type="file" class="form-control" id="pimage" name="pimage">
			</div>
			

			<div class="form-group">
				<label for="ptags">Health condition</label>
				<textarea id="ptags" name="ptags" class="form-control" placeholder="Health condition"><?php echo @$tags ?></textarea>
			</div>
		
			<input type="submit" class="btn btn-primary" name="add" value="submit">
		</form>
	</div>
