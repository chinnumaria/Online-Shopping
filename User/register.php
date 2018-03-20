	<?php
				session_start();
			
				$con=mysqli_connect("localhost","maria","maria","os");
				$name=$_POST["txtname"];
				$mob=$_POST["txtmob"];
				$email=$_POST["txtemail"];
				$pass=$_POST["txtpass"];
				$cpass=$_POST["txtcpass"];
				if($pass!=$cpass)
				{
					echo "<script>var confirm = confirm(\"passwords not matching!\");
					if(confirm){ 
					document.getElementsByName('pass').value='';
					document.getElementsByName('cpass').value='';
					window.history.back();
					
					}
					else{
					document.getElementsByName('pass').value='';
					document.getElementsByName('cpass').value='';
					window.history.back();
					
					}
					</script>";
					
					
				}
				$cmail="SELECT email FROM registration WHERE email = '$email';";
				$res=mysqli_query($con,$cmail);
				if(mysqli_num_rows($res)>0)
				{
					echo "<script>var confirm = confirm(\"email already exists!\");
					if(confirm){ 
					window.history.back();
					}
						else{
					window.history.back();
					}
					</script>";
					
				}
				else{
				$sql="insert into registration(name,mob,email,pass,curdate)values('$name',$mob,'$email','$pass',NOW());";
				mysqli_query($con,$sql);
				$_SESSION['username'] = $_POST['txtemail'];
				header('location:Index_user.php');
				}
				
		
	?>		