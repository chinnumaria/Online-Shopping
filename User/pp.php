
<?php
session_start();
$con=mysqli_connect("localhost","root","","os");

$id=$_SESSION["txtusername"];
				$con=mysqli_connect("localhost","root","","os");
				$si="select * from registration where email='$id';";
				$resi=mysqli_query($con,$si);
				$rew=mysqli_fetch_assoc($resi);
				$uid=$rew["uid"];

$s="SELECT t_price,pid,invoice FROM purchase where invoice=(SELECT MAX(invoice) FROM purchase)";
$r=mysqli_query($con,$s);

while($re = mysqli_fetch_assoc($r))
{
$inv=$re['invoice'];
$pid=$re['pid'];
$tpi=$re['t_price'];
$tp=$tpi;
echo $tp;
echo "<br/>";

$sle="SELECT * FROM product where p_id='$pid'";
$rle=mysqli_query($con,$sle);
$rq = mysqli_fetch_assoc($rle);
$sname=$rq['p_seller'];







}


$sql="UPDATE purchase SET `status`='p',`pstat`='Ordered' WHERE uid='$uid' and invoice='$inv';";
$sl=mysqli_query($con,$sql);
echo $sl;
echo "<br/>";

$syl="SELECT * FROM account";
$ryl=mysqli_query($con,$syl);
$ral = mysqli_fetch_array($ryl);
$at=$ral['amount'];
$att=$at+$tp;

$szl="UPDATE `account` SET `amount`='$att'";
$rzl=mysqli_query($con,$szl);
echo $szl;
echo $szl;
echo "<br/>";

$se="DELETE FROM `cart` WHERE uid='$uid'";
$a=mysqli_query($con,$se);
echo $a;
echo "<br/>";

 header('location:success1.php'); 	 	 
?>