<?php 
  include('./main_include/header.php');
?>
<!--start course page banner-->
<div class="container-fluid bg-dark">
  <div class="row">
    <img src="./images/coursebanner.jpg" alt="courses" style="height: 500px; width: 100% object-fit: cover;box-shadow: 10px;">
  </div>
</div>
<!--end course page banner-->

<!-- start payment content-->
<div class="container">
  <h2 class="text-center my-4">Payment Status</h2>
  <form method="post" action="">
  <div class="form-group row">
    <div>
      <input type="text"  class="form-control mx-3" placeholder="Order Id">
    </div>
    <div class="col-12 center">
      <br>
      <input type="submit" class="btn btn-primary mx-4" value="View">
      
    </div>
    
  </div>
  </form>
</div>
<!--end payment content-->

<?php 
  include('./contact.php');
?>
<?php
include('./main_include/footer.php');
?>