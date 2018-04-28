<?php
session_start();
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	
	
				$sql="select * from seller where s_id='$x';";
				$res=mysqli_query($con,$sql);
				$row=mysqli_fetch_assoc($res);
				$sn=$row["s_name"];
				
				$sub=$_POST["sub"];
				$msg=$_POST["msg"];
				
				$sq="INSERT INTO `warning`(`sid`, `sub`, `msg`, `curdate`) VALUES ('$x','$sub','$msg',NOW())";
				 mysqli_query($con,$sq); 
				echo $sq;
				
				$sqe="UPDATE `product` SET `p_select`='d' WHERE p_seller='$sn'";
				 mysqli_query($con,$sqe); 
				echo $sqe;
				
				
				  echo "<script>var confirm = confirm(\"Warning successfully sent!\");
					if(confirm){ 
					window.history.back();
					}
					</script>";  
				 
				
?>