<?php
session_start();
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	
	
	$sl="select * from saccount where sid=$x;";
	$r=mysqli_query($con,$sl);
	$rs = mysqli_fetch_array($r);
	$slname=$rs['sname'];
	$sal=$rs['amt'];
	echo $sl;
echo "<br/>";
	
	$w=intval($sal*5/100);
	
	$t=intval($sal-$w);
	
	$sle="select * from account";
	$re=mysqli_query($con,$sle);
	$rse = mysqli_fetch_array($re);
	$sa=$rse['amount'];
	$sw=$sa-$t;
	
	$sql="update account set amount='$sw';";
	mysqli_query($con,$sql);
	echo $sql;
echo "<br/>";
	
	$sqle="update saccount set amt='0' where sid='$x';";
	mysqli_query($con,$sqle);
	echo $sqle;
echo "<br/>";
	
	
	$sqe="INSERT INTO `salary`(`sid`, `sname`, `amt`, `paid`, `curdate`) VALUES ('$x','$slname','$sal','$t',NOW())";
	mysqli_query($con,$sqe);
	echo $sqe;
echo "<br/>";
	
	 header("location:Admin_pays.php");
	
	echo "<script>var confirm = confirm(\"Seller has been approved!\");
          if(confirm){ 
              window.location='Admin_pays.php';
           }
		   else{
			   window.location='Admin_pays.php';
		   }
          </script>"; 
	
	
?>