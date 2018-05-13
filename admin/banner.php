<?php
	require_once("inc/header.php");
	require_once("inc/navbar.php");
	// if admin is not login send him to login.php
	not_login($_SESSION['admin_id'], "login.php");
?>
<div class="container padding-10 ">
	<div id="search-container">
		<h1 class="text-center text-bs-primary text-upper">Search for any patients</h1>
		<div class="col-sm-6 col-md-6 pull-left">
                  <form class="navbar-form" role="search" action="search.php" method="get">
                  <div class="input-group width-100">
                      <input required type="text" class="form-control" placeholder="Search" name="search" id="search" value="<?php if(isset($_GET['search'])) echo escape($_GET['search']) ?>">
                      <div class="input-group-btn">
                          <button class="btn btn-primary" type="submit"><i class="fa fa-search text-18"></i></button>
                      </div>
                  </div>
                  </form>
              </div>
	</div>
