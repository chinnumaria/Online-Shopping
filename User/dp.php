<?php
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$sql="delete from cart where pid=$x;";
	mysqli_query($con,$sql);
	
	/* header("location:my_cart_test.php"); */
	
	echo "<script>var confirm = confirm(\"This product has been deleted!\");
          if(confirm){ 
              window.location='my_cart_test.php';
           }
		  
          </script>";
	
	
?>