	<?php
				session_start();
			
				$con=mysqli_connect("localhost","maria","maria","os");
				$name=$_POST["txtname"];
				$g=$_POST["gender"];
				$mob=$_POST["txtmob"];
				$email=$_POST["txtusername"];
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
				$sql="insert into registration(name,gender,mob,email,pass,curdate)values('$name','$g',$mob,'$email','$pass',NOW());";
				mysqli_query($con,$sql);
				$_SESSION['txtusername'] = $_POST['txtusername'];
				header('location:myprofile.php');
				}
				
		
	?>		