<?php
session_start();

	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$sql="DELETE FROM `product` WHERE p_select='d' and p_id=$x;";
	 mysqli_query($con,$sql); 
	echo $sql;
	
	
	 echo "<script>var confirm = confirm(\"Product has been deleted!\");
          if(confirm){ 
              window.location='Admin_epr.php';
           }
		   else{
			   window.location='Admin_epr.php';
		   }
          </script>";
	 
	
?>