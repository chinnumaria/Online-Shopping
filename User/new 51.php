<?php
session_start();

$id=$_SESSION["txtusername"];
				$con=mysqli_connect("localhost","root","","os");
				$sq="select * from registration where email='24';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$uid=$row["uid"];
				$uname=$row["name"];
				
				$arr = explode(' ',trim($uname));
    echo $arr[0];

				
				
				

?>