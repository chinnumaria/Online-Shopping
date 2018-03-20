<?php
session_start();
$con=mysqli_connect("localhost","maria","maria","os");
$user=$_POST["txtemail"];
$pass=$_POST["txtpassword"];
$sq="select name,pass,usertype from registration where email='$user' and pass='$pass';";
$res=mysqli_query($con,$sq);

if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$type=$row["usertype"];
	if($row["usertype"]==0){
		$_SESSION['txtemail'] = $user;
		header('location:../../Admin_Home.php');
	}
	else{
		$_SESSION['username'] = $_POST['txtemail'];
		header('location:A_login.html');
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
