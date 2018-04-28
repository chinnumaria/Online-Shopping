	<?php
				session_start();
			$uid=$_SESSION["uid"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$name=$_POST["txtname"];
				$adr=$_POST["txtad"];
				$mob=$_POST["txtmob"];
				$loc=$_POST["txtloc"];
				$pin=$_POST["txtpin"];
				$city=$_POST["txtcity"];
				
				
				$sql="UPDATE `u_profile` SET `f_name`='$name',`ph`='$mob',`address`='$adr',`locality`='$loc',`pin`='$pin',`city`='$city' WHERE uid='$uid'";
				mysqli_query($con,$sql);
				
				header('location:Index_user.php');
				
				
		
	?>		