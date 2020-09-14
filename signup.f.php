<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
    input{
    width : 300px;
    }
    </style>
    <script type="text/javascript" language="javascript">
function validate()
{
	var a=document.form.fname.value;
	var b=document.form.pwd.value;
	var c=document.form.pass.value;
	var e=document.form.contact.value;
	if(!isNaN(a))
	{
		alert("Name can be character only ");
		document.form.fname.focus();
		return false;
	}
	if(b != c)
	{
		alert("Both password should be same");
		document.form.pwd.focus();
		return false;
	}

	if(e.length<10 || e.length>10)
	{
		alert("plase enter number properly");
		document.form.contact.focus();
		return false;
	}

	}
</script>

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
<center>
<br/>
<h3> Sign Up </h3></center>
<br/>
<div class="container" >
<center>
<form name="form" method="POST" action="signup.b.php" onsubmit="return validate();">
<div class="input-group col-md-6 mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text" >Name</span>
  </div>
  <input type="text" class="form-control" name="fname" placeholder="Enter Name" required >
</div>
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
<div class="input-group col-md-6 mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text" >Password</span>
  </div>
  <input type="password" class="form-control" name="pass" placeholder="Re-Enter Password" required >
</div>
<div class="input-group col-md-6 mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text" >Contact No.</span>
  </div>
  <input type="number" class="form-control" name="contact" placeholder="Enter no." required >
</div>


      <center><button type="submit" class="btn btn-primary">Sign Up</button></center>

</form>

</center>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>