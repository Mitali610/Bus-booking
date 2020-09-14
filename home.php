

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Online Bus Reservation</title>
  </head>
  <body>
	<?php include 'include/header.html' ?>

	<div class="container">
    <?php
    if(isset($_GET['msg']))
    {
      echo 
      '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><center>'.$_GET["msg"].'</center></strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    
    }
    ?>


<div id="bus" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#bus" data-slide-to="0" class="active"></li>
    <li data-target="#bus" data-slide-to="1"></li>
    <li data-target="#bus" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="include/bus.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color:black">
      <h5>Book Bus</h5>
        <p>Book bus from anywhere.</p>
       </div>
    </div>
    <div class="carousel-item">
      <img src="include/bus1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color:black">
      <h5>Book Online</h5>
        <p>Book ticket online and get up to 20% discount.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="include/bus2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#bus" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#bus" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
