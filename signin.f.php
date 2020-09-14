<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  </head>
<body>
<?php include 'include/header.html' ?>

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
<br>
<center>
<h3> Sign In </h3><br/><br/>
<div class="container" >

<form action="signin.b.php" method="post">
<div class="input-group col-md-6 mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text" >Email</span>
  </div>
  <input type="email" class="form-control" name="mail" placeholder="Enter Email"  required >
</div>
<div class="input-group col-md-6 mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text" >Password</span>
  </div>
  <input type="password" class="form-control" name="pwd" placeholder="Enter Password" required >
</div>
 
  <button type="submit" class="btn btn-primary">Login</button>
</form>

</div></center>
 </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
