<?php
  require_once("inc/header.php");
  require_once("inc/navbar.php");
  // check admin is logged in or not
  not_login($_SESSION['admin_id'], "login.php");
?>
<div class="container padding-10">
  <div id="search-container">
      <h1 class="text-center text-upper text-bs-primary">Survey reports</h1>
      <?php
        // count user,orders,products category etc
      $user_count = $db->GetNum("product",null);
      ?>
      <!-- information tile -->
    <div class="row">
      <!-- USER COUNT -->
 
         
          <div class="table-responsive">
    <table class="table table-bordered table-striped table-condensed">
                 <th>Total Refugees</th>
                 <th>Total Male</th>
                 <th>Total Female</th>

                 <tr>
                 <td><p><?php echo $user_count; ?></p></td>
                 <td></td>
                 <td></td>
                 </tr>
           
            <h3>Users</h3>
            </table>
          </div>
         
  
        <!-- / USER COUNT -->


      <!-- / information tile -->

 
      
  </div>
</div>
