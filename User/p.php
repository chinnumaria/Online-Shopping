
<?php
session_start();
$id=$_SESSION["txtusername"];
				$con=mysqli_connect("localhost","root","","os");
				$si="select * from registration where email='$id';";
				$resi=mysqli_query($con,$si);
				$rew=mysqli_fetch_assoc($resi);
				$uid=$rew["uid"];

$fname=$_POST["fname"];
				$mob=$_POST["ph"];
				$adr=$_POST["address"];
				$loc=$_POST["locality"];
				$pin=$_POST["pin"];
				$city=$_POST["city"];
	
				
$sqs="insert into p_address(uid,name,phone,address,locality,pin,city,curdate) values('$uid','$fname','$mob','$adr','$loc','$pin','$city',NOW());";
$s=mysqli_query($con,$sqs);
echo $s;
echo "<br/>";



 header('location:py1.php'); 	 	 
?>