<?php
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$sql="delete from product where p_id=$x;";
	mysqli_query($con,$sql);
	
	header("location:Admin_dsp.php");
	
	echo "<script>var confirm = confirm(\"Seller has been approved!\");
          if(confirm){ 
              window.location='product_pending.php';
           }
		   else{
			   window.location='product_pending.php';
		   }
          </script>";
	
	
?>