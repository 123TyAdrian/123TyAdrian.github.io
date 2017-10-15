<?php
session_start();
	require("connection.php");
	$query="SELECT * FROM tbl_users where uname='".$_POST["uname"]."' and pword='".$_POST["pword"]."'";
	$result=$conn->query($query);
	$rownums=$result->rowCount();
	if($rownums>=1){
	$_SESSION["login"]=true;
	$_SESSION["users"]=$_POST["uname"];
		header("location:prof.php");	
	}else{ 
		echo "<script>self.location='index.php'</script>";
	}
?>