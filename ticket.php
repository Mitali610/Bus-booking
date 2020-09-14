<?php
session_start();
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="bus";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$mail=$_SESSION["mid"];
$bno=$_SESSION["bno"];
$bname=$_SESSION["bname"];
$start=$_SESSION["start"];
$end=$_SESSION["end"];
$date=$_SESSION["date"];
$dt=$_SESSION["dt"];
$price=$_SESSION["price"];
$sit=$_SESSION["seat"];
$bs=$_SESSION["bno"]."seat";
$d=strftime("%H:%M:%S",strtotime($dt));
$daten=date_create($date);
$a=date("Y-m-d",strtotime($date));
echo "<br><center><h3> Ticket </h3></center><br>";
$flag=0;
if(!$conn)
{
  die("connection falied".mysqli_connect_error());
}

$n2=count($sit);
  for($i=0;$i<$n2;$i++)
  {
    $s=$sit[$i];
    $name=$_POST["n$i"];
    $age=$_POST["a$i"];
    $pnr=$bno.$sit[$i];
    $sql2="INSERT INTO `{$bs}` (pnrno,mail,busno,busname,start,end,date,dt,price,seat,pname,age) VALUES('$pnr','$mail','$bno',
    '$bname','$start','$end','$a','$d','$price','$s','$name','$age')";
    if(mysqli_query($conn,$sql2))
    {

    echo "
    <!doctype html>
   <html lang='en'>
   <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <style>
    td{ padding: 10px; }
    </style>
    </head>
    </body>
    <div class='container'>
    <center>
   
    <div class='border border-primary'>
    <strong> Online Bus Reservation</strong>
     <table>
     <tr> <td><strong>PNR No.</strong></td><td>".$pnr."</td></tr>
     <tr> <td><strong>Mail Id</strong></td><td>".$mail."</td></tr>
     <tr> <td><strong>Bus No.</strong></td><td>".$bno."</td></tr>
     <tr> <td><strong>Bus Name</strong></td><td>".$bname."</td></tr>
     <tr> <td><strong>Pasenger Name</strong></td><td>".$name."</td></tr>
     <tr> <td><strong>Pasenger Age</strong></td><td>".$age."</td></tr>
     <tr> <td><strong>From</strong></td><td>".$start."</td></tr>
     <tr> <td><strong>To</strong></td><td>".$end."</td></tr>
     <tr> <td><strong>Date</strong></td><td>".$a."</td></tr>
     <tr> <td><strong>Departure Time</strong></td><td>".$d."</td></tr>
     <tr> <td><strong>Price</strong></td><td>".$price."</td></tr>
     <tr> <td><strong>Seat No</strong></td><td>".$s."</td></tr></center>
     <table>
    </div><br>
    Have a Happy And Safe Journey!
    </div>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
    </body>
    </html>
    ";

    }
    else
    {
        $flag=$flag+1;
    }
  }

if($flag!=0)
{
echo "<br><center> Something Went Wrong. Please Try Again!</center>";
}  


?>