<?php
session_start();
if(!(isset($_SESSION["login"]))){
		
		header("location:index.php");}
require("connection.php");
$query="SELECT * FROM tbl_users where uname='".$_SESSION["users"]."'";
$result=$conn->query($query);

while($data=$result->fetch(PDO::FETCH_BOTH)){
	$uname=$data[0];
	$fullname=$data[2];
	$birthday=$data[3];
	$gender=$data[4];
		
	
	}
?>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
	<body>
	<center>
		<p>Email: <?php echo $uname;?></php>
		<p>Name: <?php echo $fullname;?></php>
		<p>Birthday: <?php echo $birthday;?></php>
		<p>Gender: <?php echo $gender;?></php><br><br>
			
		
<div class="out1">	
<a href = "out.php" target =_self> Logout </a>
</div>

<div class="out2">
<a href="link1.php">Link 1</a> 
</div>
		
		<img src="">
		<img src="">
		<img src="">
		
		
		<div class="out3">
<a href="link2.php">Link 2</a> 
</div><br><br>

        <img src="3.jpg" style="height:190px; width:190px;">
		<img src="7.jpg" style="height:190px; width:190px;"> 
		<img src="9.jpg" style="height:190px; width:190px;">
		
		<div class="out4">
<a href="link3.php">Link 3</a> 
</div>


		
			<center>
			
		</section>
	</body>
	</html>
