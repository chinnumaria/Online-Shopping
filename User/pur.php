<?php
session_start();

$con=mysqli_connect("localhost","root","","os");
$itemValues=0;

$s="SELECT MAX(invoice) AS maxi FROM purchase";
$r=mysqli_query($con,$s);
$re = mysqli_fetch_assoc($r);
$inv=$re['maxi'];
$j=1;
$invoice=$inv+$j;

$id=$_SESSION["txtusername"];
				$con=mysqli_connect("localhost","root","","os");
				$si="select * from registration where email='$id';";
				$resi=mysqli_query($con,$si);
				$rew=mysqli_fetch_assoc($resi);
				$uid=$rew["uid"];
				
	$query="INSERT INTO `purchase`(`invoice`, `pid`, `uid`, `price`, `qty`, `dis`, `dc`, `subt`, `t_price`, `curdate`) VALUES ";
				
$itemCount = count($_POST["qty"]);

for($i=0;$i<$itemCount;$i++) 
{	
$itemValues++;

$qty= $_POST["qty"][$i];

$pid=$_POST["pid"][$i];

$sq="select * from product where p_id='$pid';";
$re=mysqli_query($con,$sq);
$ro=mysqli_fetch_assoc($re);
$pr=$ro["p_price"];
$dis=$ro["p_dis"];
$price=$pr-$dis;
$sub=$qty*$price;
$st= $_POST["Subtotal"];

$dc=50;

$subt=$sub+$dc;
$st= $_POST["Subtotal"];
$sbt=$st+$dc;


/* echo "<br/>";
echo $invoice;
echo "<br/>";
echo $pid;
echo "<br/>";
echo $uid;
echo "<br/>";
echo $pr;
echo "<br/>";
echo $qty;
echo "<br/>";
echo $dis;
echo "<br/>";
echo $dc;
echo "<br/>";
echo $subt;
echo "<br/>";
echo $st;
echo "<br/>"; */

$qvalue="('$invoice','$pid','$uid','$pr','$qty','$dis','$dc','$sub','$sbt',NOW())";
$sql = $query.$qvalue;

$sse="select * from product where p_id='$pid';";
$eqs=mysqli_query($con,$sse);

$reqs = mysqli_fetch_assoc($eqs);
$pqty=$reqs["p_qty"];
$pname=$reqs["p_name"];
$pimg=$reqs["p_img"];
$pq=$pqty-$qty;
$sel=$reqs["p_seller"];

echo $pqty;
echo "<br/>";
echo $pq;
echo "<br/>";

$ql="INSERT INTO `p_seller`(`uid`,`pid`,`pimg`,`pname`,`qty`, `sname`, `amount`,`status`,`date`) VALUES ('$uid','$pid','$pimg','$pname','$qty','$sel','$sbt','ns',NOW())";


$sl="UPDATE `product` SET `p_qty`=$pq where p_id='$pid';";

$c="DELETE FROM `cart` WHERE pid='$pid';";
	 
if($itemValues!=0) 
	{
	echo $sql;
	echo "<br/>";
    mysqli_query($con,$sql);
	$qvalue=""; 
	
	mysqli_query($con,$ql);
	echo $ql;
	
     $w=mysqli_query($con,$sl);
	 echo $sl;
	 echo "<br/>";
	$sl="";
	
	$r=mysqli_query($con,$c);
	 echo $r;
	 echo "<br/>";
	$c="";
	
	
	}

}

$dc=50;
$st= $_POST["Subtotal"];
$sbt=$st+$dc;

$ss="select * from account";
$eq=mysqli_query($con,$ss);
$req = mysqli_fetch_assoc($eq);
$ac=$req['amount'];
$acc=$ac+$sbt;

echo "<br/>";
echo "<br/>";
echo $sbt;
echo "<br/>";
echo $ac;
echo "<br/>";
echo $acc;


  $sss="UPDATE `account` SET `amount`=$acc";
mysqli_query($con,$sss);  



 header('location:pay.php');  
?>