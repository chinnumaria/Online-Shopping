	<?php
				session_start();
			
				$con=mysqli_connect("localhost","maria","maria","os");
				$sname=$_POST["txt_sname"];
				$ow=$_POST["txt_owner"];
				$email=$_POST["txt_semail"];
				$mob=$_POST["txt_smob"];
				$plc=$_POST["txt_splace"];
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
				$cmail="SELECT s_email FROM seller WHERE s_email = '$email';";
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
				$sql="insert into seller(s_name,s_owner,s_email,s_mob,s_place,s_pass,curdate)values('$sname','$ow','$email','$mob','$plc','$pass',NOW());";
				mysqli_query($con,$sql);
				$_SESSION['txtname'] = $name;
				header('location:blank.html');
				}
				
		
	?>		