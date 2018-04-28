<?php
session_start();
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	
	
				$sql="select * from seller where s_id='$x';";
				$res=mysqli_query($con,$sql);
				$row=mysqli_fetch_assoc($res);
				$sn=$row["s_name"];
				
				$sqlr="DELETE FROM `warning` WHERE sid='$x';";
				  mysqli_query($con,$sqlr);  
				echo $sqlr;
				
				
				
				$sqe="DELETE FROM `product` WHERE p_seller='$sn'";
				  mysqli_query($con,$sqe);  
				echo $sqe;
				
				$sqle="DELETE FROM `seller` WHERE s_id='$x';";
				  mysqli_query($con,$sqle);  
				echo $sqle;
				
				
				
				  echo "<script>var confirm = confirm(\"Seller successfully deleted!\");
					if(confirm){ 
					window.history.back();
					}
					</script>";   
				 
				
?>