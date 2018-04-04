<?php
$con=mysqli_connect("localhost","maria","maria","os");
$uid=$_GET["uid"];
$pid=$_GET["pid"];

$s="select * from registration where uid='$uid';";
$r=mysqli_query($con,$s);
$row=mysqli_fetch_assoc($r);
$name=$row["name"];
	$pid=$_GET["pid"];
	
	
	$sq="select * from product where p_id='$pid';";
	$ro=mysqli_query($con,$sq);
	$rows=mysqli_fetch_assoc($ro);
	$pname=$rows["p_name"];
	$price=$rows["p_price"];
	$dis=$rows["p_dis"];
	
	
	
$sql="insert into cart1(uid,pid,quantity,curdate) values($uid,$pid,1,NOW())";
$rw=mysqli_query($con,$sql);

header("location:my_cart_test1.php"); 

?>