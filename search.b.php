
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
$s1=$_POST['city1'];
$start=$_POST['city1'];
$end=$_POST['city2'];
$date=$_POST['date'];
$_SESSION["start"]=$s1;
$_SESSION["end"]=$end;
$_SESSION["date"]=$date;
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="bus";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$flag=0;
$c=0;
$n=array();
$n1=array();
$dt=array();
if(!$conn)
{
  die("connection falied".mysqli_connect_error());
}
else
 {
  $sql="SELECT * FROM buslist";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    echo '<div class="container"> <center> <br><h3> Select bus </h3><br>
            <h5> Bus For '.$s1.' To '.$end.'</h5></center><br><br>
            <form action="seat.php" onsubmit="validate()" method=post>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Select</th>
                    <th scope="col">Bus No</th>
                    <th scope="col">Bus Name</th>
                    <th scope="col">Departure time</th>
                  </tr>
                </thead>
                <tbody>';
   while($row=mysqli_fetch_assoc($result))
  {
	$string=$row['root'];
  $str_arr=explode("-",$string);
  array_unshift($str_arr,"");
  unset($str_arr[0]);
	$i=array_search($start,$str_arr);
  $j=array_search($end,$str_arr);


  if($i and $j and $i<$j)
	{


    $flag=1;

	            $n[$c]=$row['bid'];
                    $n1[$c]=$row['bname'];

                    $sql2="SELECT * FROM `{$n[$c]}` WHERE `end`='$end'";
                    $sql3="SELECT * FROM `{$n[$c]}` WHERE `start`='$start'";
                    $result1=mysqli_query($conn,$sql2);
                    $result2=mysqli_query($conn,$sql3);
                    while($row3=mysqli_fetch_assoc($result2))
                    {

                        $dt[$c]=$row3['dt'];
                    }

                    echo '<tr>
                    <th ><input type="radio" value='.$c.' name="bus" required></th>
                    <td>'.$n[$c] .'</td>
                    <td>'.$n1[$c].'</td>
                    <td>'.strftime("%H:%M",strtotime($dt[$c])).'</td>
                  </tr>';
                  $c=$c+1;


	}


}

}
echo '</tbody>
</table>
</div>
<center><input class="btn btn-primary" type="submit" value="Submit"></center></form>';


$_SESSION["bno"]=$n;
$_SESSION["bname"]=$n1;
$_SESSION["dt"]=$dt;
if($flag==0)
{
    header("Location:search.php?msg=Bus Not Found.Try For other.");

}
}

?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>