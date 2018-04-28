<?php
	session_start();
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$y=$_GET['y'];
				
				$si="select * from registration where uid='$y';";
				$resi=mysqli_query($con,$si);
				$rew=mysqli_fetch_assoc($resi);
				$uid=$rew["uid"];
	
	$sql="UPDATE `p_seller` SET `status`='apr',`u_status`='Will be delivered within 5 days!!!' WHERE pid='$x' and uid='$uid'";
	mysqli_query($con,$sql);
	echo $sql;
	echo "</br>";
	
	/* header("location:my_cart_test.php"); */
	
	$id=$_SESSION["txtemail"];
								$con=mysqli_connect("localhost","maria","maria","os");
								$sq="select * from registration where uid='$y';";
								$ress=mysqli_query($con,$sq);
								$rowe=mysqli_fetch_assoc($ress);
								$uid=$rowe["uid"];
								
								$sel="SELECT * from p_seller where pid='$x' and uid='$y'";
								$res=mysqli_query($con,$sel);
								$row=mysqli_fetch_assoc($res);
							
								/* echo $sel; */
										$unn=$row["uid"];
										$pn=$row["pname"];
										$qty=$row["qty"];
										$amt=$row["amount"];
										$date=$row["date"];
										$s=$row["sname"];
										
										
								 $sez="SELECT * from registration where uid='$unn';";
											$rez=mysqli_query($con,$sez);
											$rw=mysqli_fetch_assoc($rez);
											$una=$rw["name"];
											$mail=$rw["email"];
				 $sz="SELECT * from u_profile where uid='$unn';";
											$rz=mysqli_query($con,$sz);
											$rwz=mysqli_fetch_assoc($rz);
											$mob=$rwz["ph"];
											$adr=$rwz["address"];
											$loc=$rwz["locality"];
											$city=$rwz["city"];
											$pin=$rwz["pin"];
											
											
			$st="INSERT INTO `sod`(`pid`, `pname`, `qty`, `uname`, `email`, `mob`, `adr`, `loc`, `city`, `pin`,`seller`) VALUES ('$x','$pn','$qty','$una','$mail','$mob','$adr','$loc','$city','$pin','$s')";
			echo $st;
			 mysqli_query($con,$st);	 
	
	
	 echo "<script>var confirm = confirm(\"This product has been Approved!\");
          if(confirm){ 
              window.location='seller_oview.php';
           }
		  
          </script>"; 
	
	
?>