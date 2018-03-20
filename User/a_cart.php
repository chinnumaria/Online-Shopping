<?php
$con=mysqli_connect("localhost","maria","maria","os");
$uid=$_GET["uid"];

$s="select * from registration where uid='$uid';";
$r=mysqli_query($con,$s);
$row=mysqli_fetch_assoc($r);
$name=$row["name"];
	$pid=$_GET["pid"];
	
	
	$sq="select * from product where p_id='$pid';";
	$ro=mysqli_query($con,$sq);
	$rows=mysqli_fetch_assoc($ro);
	$pname=$rows["p_name"];
	$price=$rows["p_price"];
	$dis=$rows["p_dis"];
	
	
	$sqe="select * from cart where pid='$pid' and uid=$uid";
	$resi=mysqli_query($con,$sqe);
if(mysqli_num_rows($resi)>0){
echo "<script>var confirm = confirm(\"Already Exists!\");
          if(confirm){ 
              window.history.back();
           }
		   else{
			   window.history.back();
			  
		   }
          </script>";
}
else{	
$sql="insert into cart(uid,pid,quantity) values($uid,$pid,1)";
$rw=mysqli_query($con,$sql);
header("location:index_user.php");
}
?>