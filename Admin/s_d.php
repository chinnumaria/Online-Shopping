<?php
	session_start();
	
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select s_name from seller where s_email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$sn=$row["s_name"];
				
			$x=$_GET['x'];
	$y=$_GET['y'];	
				
	$sql="UPDATE `sod` SET `status`='y' WHERE pid='$x' and uname='$y'";
	mysqli_query($con,$sql);
	
	$sz="select * from p_address where uname='$y';";
				$rez=mysqli_query($con,$sz);
				$roz=mysqli_fetch_assoc($rez);
				$uid=$roz["uid"];
	
	$szl="UPDATE `p_seller` SET `u_status`='Delivered!!!' WHERE pid='$x' and uid='$uid'";
	mysqli_query($con,$szl);
	
	/* header("location:my_cart_test.php"); */
	
	
	
	
	/* echo "<script>var confirm = confirm(\"This product has been Approved!\");
          if(confirm){ 
              window.location='s_odet.php';
           }
		  
          </script>"; */
	
	
?>