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
	
	$arr = explode(' ',trim($y));
	$yy=$arr[0];
	
	$sz="select * from p_address where name='$yy';";
				$rez=mysqli_query($con,$sz);
				$roz=mysqli_fetch_assoc($rez);
				$uid=$roz["uid"];
				echo $sz;
	
	$szl="UPDATE `p_seller` SET `u_status`='Delivered!!!' WHERE pid='$x' and uid='$uid'";
	mysqli_query($con,$szl);
	echo "</br>";
	echo $szl;
	
	$sul="UPDATE `purchase` SET `pstat`='Delivered!!!' WHERE pid='$x' and uid='$uid'";
	mysqli_query($con,$sul);
	echo "</br>";
	echo $szl;
	
	$pd="select * from purchase WHERE pid='$x' and uid='$uid' and invoice=(SELECT MAX(invoice) FROM purchase)";
	$pdd=mysqli_query($con,$pd);
	$rp = mysqli_fetch_array($pdd);
	$tp=$rp['t_price'];
	
	$sy="SELECT amt FROM saccount where sname='$sn'";
$ry=mysqli_query($con,$sy);
$ra = mysqli_fetch_array($ry);
$am=$ra['amt'];
echo $sy;
echo "<br/>";
echo $am;
echo "<br/>";
$tpp=$tp+$am;
echo $tpp;

$sz="UPDATE `saccount` SET `amt`='$tpp',`status`='ps' WHERE sname='$sn'";
$rz=mysqli_query($con,$sz);
echo $sz;
echo "<br/>";
	
	/* header("location:my_cart_test.php"); */
	
	
	
	
	  echo "<script>var confirm = confirm(\"This product has been Approved!\");
          if(confirm){ 
              window.location='s_odet.php';
           }
		  
          </script>";  
	
	
?>