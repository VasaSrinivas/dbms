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

<!-- start content-->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
    </div>
    <div class="col-md-4">
      <div class="card-body">
        <h5 class="card-title">Course Name: learn guitar</h5>
        <p class="card-text"> Description: lorem ipsum dolor sit amet consectetur adipiscing elit. Nostrum, provident. </p>
        <p class="card-text"> Duration: 10 days </p>
        <form action="" method="post">
          <p class="card-text d-inline"> Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 2000</span></p>
          <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
        </form>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Lesson No.</th>
          <th scope="col">Lesson Name</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Introduction</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>


<!--end content-->


<?php
include('./main_include/footer.php');
?>