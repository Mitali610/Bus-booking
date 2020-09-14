<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  </head>
  </body>

<?php include 'include/header.html';
session_start();
if(!empty($_POST['checklist']))
{
  $check=$_POST['checklist'];

}
$_SESSION["seat"]=$check;
$n2=count($check);
echo "<br/> <center> <h3>Enter Passenger Information</h3><br/>";
echo "<form name='myform' method='post' action='ticket.php'>";
for($i=0;$i<$n2;$i++)
{
 $j=$i+1;
  echo "Passenger $j <br/><br/>
  <div class='input-group col-md-3 mb-3'>
  <div class='input-group-prepend'>
    <label class='input-group-text' for='name'>Name</label>
  </div>
    <input type='text' class='form-control' name='n$i'>
</div>
<div class='input-group col-md-3 mb-3'>
  <div class='input-group-prepend'>
    <label class='input-group-text' for='age'>Age</label>
  </div>
    <input type='number' class='form-control' name='a$i'>
</div><br/>";


}
echo "<button type='submit' class='btn btn-info'>Book</button>";
echo "</form>";
echo "</center>";
?>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>