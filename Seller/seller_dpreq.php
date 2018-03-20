<?php
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$sql="update product set p_select='d' where p_id=$x;";
	mysqli_query($con,$sql);
	
	header("location:seller_pview.php");
	
	echo "<script>var confirm = confirm(\"Seller has been approved!\");
          if(confirm){ 
              window.location='product_pending.php';
           }
		   else{
			   window.location='product_pending.php';
		   }
          </script>";
	
	
?>