		<?php	
		session_start();
		$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select s_name from seller where s_email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$sname=$row['s_name'];
				
					$con=mysqli_connect("localhost","maria","maria","os");
						if( $_FILES['p_img']['name'] != "" )
						{
							$target_path = "images/";
							$target_path = $target_path.basename( $_FILES['p_img']['name']); 
							if(move_uploaded_file($_FILES['p_img']['tmp_name'], $target_path)) 
								{
									echo "The file ".basename( $_FILES['p_img']['name'])." has been uploaded";
				
								} 
						 else
							{
								
								 echo "<script>var confirm = confirm(\There was an error uploading the file, please try again!\");
									if(confirm){ 
												window.history.back();
											}
									else{
												window.history.back();
										}
								</script>";
							}

							// copy( $_FILES['file']['name'], "/SendEmail" ) or 
							//       die( "Could not copy file!");
							}
							

				
						$con=mysqli_connect("localhost","maria","maria","os");
						$ipath=$_FILES["p_img"]["name"];
						$cat=$_POST["cat"];
						$brand=$_POST["brand"];
						$name=$_POST["txt_pname"];
						$price=$_POST["txt_price"];
						$dis=$_POST["txt_pdis"];
						$des=$_POST["txt_des"];
						$qty=$_POST["txt_pqty"];
						
						$sele='a';
						 $tit="SELECT * FROM product WHERE p_name = '$name';";
						$res=mysqli_query($con,$tit);
						echo $name;
						if(mysqli_num_rows($res)>0)
						{
							echo "<script>var confirm = confirm(\"Product Already Existed!\");
							if(confirm){ 
							window.history.back();
							}
								else{
							window.history.back();
							}
							</script>";
							
						}
						else{ 
							
				$sz="select * from brand where c_id='$cat' and bid='$brand';";
				$rz=mysqli_query($con,$sz);
				$ra=mysqli_fetch_assoc($rz);
				$c=$ra['bcat'];
				$b=$ra['bname'];
							
						$sql= "insert into product(p_name,p_cat,p_brand,p_price,p_dis,p_desc,p_img,p_qty,p_seller,p_select) values('$name','$c','$b','$price','$dis','$des','$ipath','$qty','$sname','a');";
						mysqli_query($con,$sql);
						echo $sql;
						
						  echo "<script type='text/javascript'>alert('Product Added');window.history.back();</script>";  
						 
						 } 
						
						 //header('location:seller_addp.php');  
					?>
			