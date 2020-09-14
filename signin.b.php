<?php
session_start();
$password=$_POST['pwd'];
$mail=$_POST['mail'];
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="bus";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$sql1="SELECT * FROM signup WHERE email='$mail'";
$res=mysqli_query($conn,$sql1);
$count=mysqli_num_rows($res);

if(!$conn)
{
  die("connection falied".mysqli_connect_error());
}
if($count==1)
{
  $sql2="SELECT password FROM signup WHERE password='$password' and email='$mail'";
  $res=mysqli_query($conn,$sql2);
  $row=mysqli_fetch_assoc($res);
  if($password==$row["password"])
  {
    $_SESSION["mid"]=$mail;
    header("Location:search.php?msg=Sign In Successfully.");

  }
  else {
    
    header("Location:signin.f.php?msg=Password is Incorrect.");
  }
}
else {
  header("location:signup.f.php?msg=You haven't registered yet.");
}
mysqli_close($conn);

?>
