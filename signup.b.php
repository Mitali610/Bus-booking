<?php
$firstname=$_POST['fname'];
$password=$_POST['pwd'];
$mail=$_POST['mail'];
$contact=$_POST['contact'];
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="bus";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn)
{
  die("connection falied".mysqli_connect_error());
}

  $sql1="SELECT * FROM signup WHERE email='$mail'";
  $result=mysqli_query($conn,$sql1);
  $row=mysqli_num_rows($result);
  if($row>0)
  {
   	header("Location:signin.f.php?msg=You Have Register Earlier.Now You can sigin.");
  }

  else
  {

    $query="INSERT INTO signup(id,firstname,password,email,contact) VALUES(NULL,'$firstname','$password','$mail','$contact')";
    if(mysqli_query($conn,$query))
    {
      
      header("Location:home.php?msg=Registerd Succesfully.Now You can sign In.");
    }
    else
     {
      echo "ERROR:not";
    }
  }

mysqli_close($conn);

?>
