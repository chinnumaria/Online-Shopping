<?php
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$p_pr="SELECT p_price FROM e_product WHERE p_id = '$x';";
	$ppr=mysqli_query($con,$p_pr);
	$row=mysqli_fetch_assoc($ppr);
	$price=$row["p_price"];
	$p_dis="SELECT p_dis FROM e_product WHERE p_id = '$x';";
	$pdis=mysqli_query($con,$p_dis);
	$rows=mysqli_fetch_assoc($pdis);
	$discount=$rows["p_dis"];
	$p_disc="SELECT p_desc FROM e_product WHERE p_id = '$x';";
	$pdisc=mysqli_query($con,$p_disc);
	$rowss=mysqli_fetch_assoc($pdisc);
	$description=$rowss["p_desc"];
	$p_key="SELECT p_key FROM e_product WHERE p_id = '$x';";
	$pkey=mysqli_query($con,$p_key);
	$rowsss=mysqli_fetch_assoc($pkey);
	$key=$rowsss["p_disc"];
	$p_qty="SELECT p_qty FROM e_product WHERE p_id = '$x';";
	$pqty=mysqli_query($con,$p_qty);
	$rowssss=mysqli_fetch_assoc($pqty);
	$qty=$rowssss["p_qty"];
	$sql="update product set p_select='apr',p_price='$price',p_dis='$discount',p_desc='$description',p_key='$key',p_qty='$qty' where p_id='$x';";
	mysqli_query($con,$sql);
	$sqll="delete from e_product WHERE p_id = '$x';";
	mysqli_query($con,$sqll);
	
	header("location:Admin_addsp.php");
	
	echo "<script>var confirm = confirm(\"Seller has been approved!\");
          if(confirm){ 
              window.location='product_pending.php';
           }
		   else{
			   window.location='product_pending.php';
		   }
          </script>";
	
	
?>