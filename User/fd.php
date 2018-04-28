<?php
session_start();
$id=$_SESSION["txtusername"];
$con=mysqli_connect("localhost","root","","os");
				$sq="select * from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$uid=$row["uid"];
				$uname=$row["name"];
				$umail=$row["email"];
				$sub=$_POST["sub"];
				$fd=$_POST["msg"];
				
				
				$sql="insert into feedback(uid,uname,uemail,sub,fd,curdate)values('$uid','$uname','$umail','$sub','$fd',NOW());";
				mysqli_query($con,$sql);
				echo $sql;
				 echo "<script>var confirm = confirm(\"Feedback successfully sent!\");
					if(confirm){ 
					window.history.back();
					}
					</script>"; 
				/* header('location:contact.php'); */
?>