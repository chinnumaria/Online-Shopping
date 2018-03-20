<?php
session_start();
$con=mysqli_connect("localhost","maria","maria","os");
$user=$_POST["txtemail"];
$pass=$_POST["txtpassword"];
$sq="select s_name,s_pass,usertype from seller where s_email='$user' and s_pass='$pass' and apr='Y';";
$res=mysqli_query($con,$sq);

if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$type=$row["usertype"];
	if($row["usertype"]==2){
		$_SESSION['txtemail'] = $user;
		header('location:../../Seller_home.php');
	}
	else{
		$_SESSION['s_email'] = $_POST['txtemail'];
		header('location:s_login.html');
		}
	}
else{	
		 echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
             window.history.back();
			 document.getElementsByName('txtpassword').value='';  
           }
		   else{
			   window.history.back();
			   document.getElementsByName('txtpassword').value='';
		   }
          </script>";
}
?>
