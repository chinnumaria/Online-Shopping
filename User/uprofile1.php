	<?php
				session_start();
			$id=$_SESSION["txtusername"];
				$con=mysqli_connect("localhost","root","","os");
				$sq="select * from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$uid=$row["uid"];
				
				$name=$_POST["txtname"];
				$adr=$_POST["txtad"];
				$mob=$_POST["txtmob"];
				$loc=$_POST["txtloc"];
				$pin=$_POST["txtpin"];
				$city=$_POST["txtcity"];
				
				
				$sql="INSERT INTO `u_profile`(`uid`, `f_name`, `ph`, `address`, `locality`, `pin`, `city`) VALUES ('$uid','$name','$mob','$adr','$loc','$pin','$city')";
				mysqli_query($con,$sql);
				
				header('location:Index_user.php');
				
				
		
	?>		