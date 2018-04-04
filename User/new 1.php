<?php
session_start();
	$id=$_SESSION["txtusername"];
	$con=mysqli_connect("localhost","root","","os");
	$si="select * from registration where email='$id';";
	$resi=mysqli_query($con,$si);
	$rew=mysqli_fetch_assoc($resi);
	$uid=$rew["uid"];

	$sq="UPDATE cart SET status='p',quantity='$qty' WHERE uid = '$uid' and pid='$pid';";
	$res=mysqli_query($con,$sq);
?>