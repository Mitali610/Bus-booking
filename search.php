<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
    select,input
    {
        width:30%;
    }

    </style>
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
<h3> Search Bus </h3></center><br/>
<div class="container">

<form action="search.b.php" method="POST">
<center>
<div class="input-group col-md-5 mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="from">FROM</label>
  </div>
  <select class="custom-select" name="city1" >

            <option value="daman">Daman</option>
			<option value="chikhali">Chikhali</option>
			<option value="navsari">Navsari</option>
			<option value="surat">surat</option>
			<option value="bharuch">Bharuch</option>
			<option value="vadodara">vadodara</option>
			<option value="anand">Anand</option>
			<option value="dholera">Dholera</option>
			<option value="bhavnagar">Bhavnagar</option>
  </select>
</div><br/>
<div class="input-group col-md-5 mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="to">TO</label>
  </div>
  <select class="custom-select" name="city2">

            <option value="chikhali">Chikhali</option>
			<option value="navsari">Navsari</option>
			<option value="surat">surat</option>
			<option value="bharuch">Bharuch</option>
			<option value="vadodara">vadodara</option>
			<option value="anand">Anand</option>
			<option value="dholera">Dholera</option>
			<option value="bhavnagar">Bhavnagar</option>
			<option value="diu">Diu</option>
			<option value="bagdana">Bagdana</option>
  </select>
</div><br/>
<div class="input-group col-md-5  mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="date">DATE</label>
  </div>
    <input type="date" name="date" class="form-control"   required>
</div><br/>
<button type="submit" class="btn btn-primary">Search</button>&emsp;
<button type="reset" class="btn btn-secondary">Reset</button>
</center>
</div>
 </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

