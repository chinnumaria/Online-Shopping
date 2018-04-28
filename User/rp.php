<?php
session_start();
	$con=mysqli_connect("localhost","maria","maria","os");
	$id=$_SESSION["txtusername"];
				
				$si="select * from registration where email='$id';";
				$resi=mysqli_query($con,$si);
				$rew=mysqli_fetch_assoc($resi);
				$uid=$rew["uid"];
	$x=$_GET['x'];
	
	$sl="select * from purchase where pid='$x' and uid='$uid';";
				$rl=mysqli_query($con,$sl);
				$rwl=mysqli_fetch_assoc($rl);
				$subt=$rwl["subt"];
				echo $sl;
				echo "</br>";
				echo $subt;
				echo "</br>";
				
				$sle="select * from product where p_id='$x'";
				$rle=mysqli_query($con,$sle);
				$rwe=mysqli_fetch_assoc($rle);
				$sn=$rwe["p_seller"];
				echo $sn;
				echo "</br>";
				
				
				$sqlz="update saccount set amt=amt-$subt where sname='$sn'";
	mysqli_query($con,$sqlz);
	echo $sqlz;
				echo "</br>";
	
	$sql="update purchase set `pstat`='Canceled' where pid=$x and uid='$uid'";
	mysqli_query($con,$sql);
	echo $sql;
	echo "<br/>";
	
	$sqle="delete from p_seller where pid=$x and uid='$uid'";
	mysqli_query($con,$sqle);
	echo $sqle;
	
	$sqle="delete from p_address where pid=$x and uid='$uid'";
	mysqli_query($con,$sqle);
	echo $sqle; 
	
	
	   header("location:order.php"); 
	
	echo "<script>var confirm = confirm(\"This product has been deleted!\");
          if(confirm){ 
              window.location='order.php';
           }
		  
          </script>";  
	 
	
?>