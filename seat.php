<?php
	$arr=array("1a"=>0,"2a"=>0,"3a"=>0,"4a"=>0,"5a"=>0,"1b"=>0,"2b"=>0,"3b"=>0,"4b"=>0,"5b"=>0,
	"1c"=>0,"2c"=>0,"3c"=>0,"4c"=>0,"5c"=>0,"1d"=>0,"2d"=>0,"3d"=>0,"4d"=>0,"5d"=>0,"1e"=>0,"2e"=>0,"3e"=>0,
	"4e"=>0,"5e"=>0);
	session_start();
	$c=$_POST["bus"];
	$bn=$_SESSION["bno"];
	$bnam=$_SESSION["bname"];
	$bdt=$_SESSION["dt"];
	$_SESSION["bno"]=$bn[$c];
	$_SESSION["bname"]=$bnam[$c];
	$_SESSION["dt"]=$bdt[$c];
$bus=$_SESSION["start"];
$bus1=$_SESSION["end"];
$newb=$_SESSION["bno"];
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="bus";
$bs=$_SESSION["bno"].''."seat";
$price=0;
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$sql1="SELECT `seat` FROM `{$bs}`";
$res=mysqli_query($conn,$sql1);
$sql2="SELECT * FROM `{$newb}`";
$result1=mysqli_query($conn,$sql2);
if($res!=NULL)
{
while($row=mysqli_fetch_assoc($res))
{
	$booked=$row["seat"];
	$arr[$booked]=1;
	
}}
while($row2=mysqli_fetch_assoc($result1))
{ 
	if($row2['start']!=$bus1)
	{
	  if($row2['start']==$bus)
	  {
		$price=$price+$row2['price'];
		$bus=$row2['end'];
	  }
	}
}
$_SESSION["price"]=$price;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="include/designstylesheet.css" >
  </head>
  </body>
<?php include 'include/header.html';?>


	<form action="seat.b.php" method="post">

<div class="plane">
	<div class="driver">
		<h1>Please select a seat</h1>
	</div>
	<div class="exit exit--front fuselage">

	</div>

	<ol class="cabin fuselage">
		<li class="row-1">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="1A" name="checklist[]" <?php if($arr["1a"]==1){echo "checked='checked'";echo "disabled";}?> value="1a"/>
					<lable for="1A">1A</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="1b" name="checklist[]" <?php if($arr["1b"]==1){echo "checked='checked'";echo "disabled";}?> value="1b"/>
					<lable for="1B">1B</lable>
				</li>
				<li class="seat">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" id="1C"<?php if($arr["1c"]==1){echo "checked='checked'";echo "disabled";}?> name="checklist[]" value="1c" />
					<lable for="1C">1C</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="1D" name="checklist[]" <?php if($arr["1d"]==1){echo "checked='checked'";echo "disabled";}?> value="1d"/>
					<lable for="1D">1D</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="1E" name="checklist[]"<?php if($arr["1e"]==1){echo "checked='checked'";echo "disabled";}?> value="1e" />
					<lable for="1E">1E</lable>
				</li>
			</ol>
		</li>

		<li class="row-2">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="2A" <?php if($arr["2a"]==1){echo "checked='checked'";echo "disabled";}?> name="checklist[]" value="2a"/>
					<lable for="2A">2A</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="2b"<?php if($arr["2b"]==1){echo "checked='checked'";echo "disabled";}?> name="checklist[]" value="2b" />
					<lable for="2B">2B</lable>
				</li>
				<li class="seat">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" <?php if($arr["2c"]==1){echo "checked='checked'";echo "disabled";}?> id="2C" name="checklist[]" value="2c"/>
					<lable for="2C">2C</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="2D" <?php if($arr["2d"]==1){echo "checked='checked'";echo "disabled";}?> name="checklist[]" value="2d" />
					<lable for="2D">2D</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="2E" <?php if($arr["2e"]==1){echo "checked='checked'";echo "disabled";}?> name="checklist[]" value="2e"/>
					<lable for="2E">2E</lable>
				</li>
			</ol>
		</li>

		<li class="row-3">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="3A" name="checklist[]" <?php if($arr["3a"]==1){echo "checked='checked'";echo "disabled";}?>  value="3a"/>
					<lable for="3A">3A</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="3B" name="checklist[]" <?php if($arr["3b"]==1){echo "checked='checked'";echo "disabled";}?> value="3b"/>
					<lable for="3B">3B</lable>
				</li>
				<li class="seat">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" <?php if($arr["3c"]==1){echo "checked='checked'";echo "disabled";}?> id="3C" name="checklist[]" value="3c"/>
					<lable for="3C">3C</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="3D" name="checklist[]" <?php if($arr["3d"]==1){echo "checked='checked'";echo "disabled";}?> value="3d" />
					<lable for="3D">3D</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="3E" name="checklist[]" <?php if($arr["3e"]==1){echo "checked='checked'";echo "disabled";}?> value="3e" />
					<lable for="3E">3E</lable>
				</li>
			</ol>
		</li>

		<li class="row-4">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="4A" name="checklist[]" <?php if($arr["4a"]==1){echo "checked='checked'";echo "disabled";}?> value="4a" />
					<lable for="4A">4A</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="4B" name="checklist[]" <?php if($arr["4b"]==1){echo "checked='checked'";echo "disabled";}?> value="4b" />
					<lable for="4B">4B</lable>
				</li>
				<li class="seat">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" <?php if($arr["4c"]==1){echo "checked='checked'";echo "disabled";}?> id="4C" name="checklist[]" value="4c"/>
					<lable for="4C">4C</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="4D" name="checklist[]" <?php if($arr["4d"]==1){echo "checked='checked'";echo "disabled";}?> value="4d" />
					<lable for="4D">4D</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="4E" name="checklist[]" <?php if($arr["4e"]==1){echo "checked='checked'";echo "disabled";}?> value="4e" />
					<lable for="4E">4E</lable>
				</li>
			</ol>
		</li>

		<li class="row-5">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="5A" name="checklist[]" <?php if($arr["5a"]==1){echo "checked='checked'";echo "disabled";}?> value="5a" />
					<lable for="5A">5A</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="5B" name="checklist[]" <?php if($arr["5b"]==1){echo "checked='checked'";echo "disabled";}?> value="5b" />
					<lable for="5B">5B</lable>
				</li>
				<li class="seat">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox"<?php if($arr["5c"]==1){echo "checked='checked'";echo "disabled";}?>  id="5C" name="checklist[]" value="5c" />
					<lable for="5C">5C</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="5D" name="checklist[]" <?php if($arr["5d"]==1){echo "checked='checked'";echo "disabled";}?> value="5d"/>
					<lable for="5D">5D</lable>
				</li>
				<li class="seat">
					<input type="checkbox" id="5E" name="checklist[]" <?php if($arr["5e"]==1){echo "checked='checked'";echo "disabled";}?> value="5e" />
					<lable for="5E">5E</lable>
				</li>
			</ol>
		</li>




	
	<div class="exit back"><br/>
	<center><input class="btn btn-primary" type="submit" value="Submit"></center>
</form>
	</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
