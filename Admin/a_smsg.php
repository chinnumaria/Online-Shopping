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
				
				$sq="INSERT INTO `smessage`(`sid`, `sub`, `msg`, `curdate`) VALUES ('$x','$sub','$msg',NOW())";
				  mysqli_query($con,$sq);  
				echo $sq;
				
				
				
				
				   echo "<script>var confirm = confirm(\"Message successfully sent!\");
					if(confirm){ 
					window.history.back();
					}
					</script>";   
				 
				
?>