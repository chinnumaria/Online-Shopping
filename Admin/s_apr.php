<?php
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$sql="update seller set apr='Y' where s_id=$x;";
	mysqli_query($con,$sql);
	
	header("location:Admin_seller.php");
	
	echo "<script>var confirm = confirm(\"Seller has been approved!\");
          if(confirm){ 
              window.location='product_pending.php';
           }
		   else{
			   window.location='product_pending.php';
		   }
          </script>";
	
	
?>