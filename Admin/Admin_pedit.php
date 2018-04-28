<?php

session_start();

	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$sql="select * FROM `e_product` WHERE p_pid=$x;";
	 $rp=mysqli_query($con,$sql);
	 $rs = mysqli_fetch_assoc($rp);
	 $price=$rs["p_price"];
	 $dis=$rs["p_dis"];
	 $des=$rs["p_desc"];
	 $pimg=$rs["p_img"];
	 $qty=$rs["p_qty"];
	echo $sql;
	echo "</br>";
	$sq="UPDATE `product` SET `p_price`='$price',`p_dis`='$dis',`p_desc`='$des',`p_img`='$pimg',`p_qty`='$qty',`p_select`='apr' WHERE p_id=$x;";
	echo $sq;
	  mysqli_query($con,$sq); 
	
	echo "</br>";
	$sqe="delete from `e_product` WHERE p_pid=$x;";
	echo $sqe;
	  mysqli_query($con,$sqe);
	   echo "<script>var confirm = confirm(\"Changes has been applied!\");
          if(confirm){ 
              window.location='Admin_epro.php';
           }
		   else{
			   window.location='Admin_epro.php';
		   }
          </script>";    
	 
	
?>