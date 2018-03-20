		<?php	
					$con=mysqli_connect("localhost","maria","maria","os");
						if( $_FILES['p_img']['name'] != "" )
						{
							$target_path = "Images/";
							$target_path = $target_path.basename( $_FILES['p_img']['name']); 
							if(move_uploaded_file($_FILES['p_img']['name'], $target_path)) 
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
						$keyw=$_POST["kwords"];
						$qty=$_POST["txt_pqty"];
						$sel=$_POST["txt_sel"];
						$tit="SELECT p_name FROM product WHERE p_name = '$name';";
						$res=mysqli_query($con,$tit);
						echo $name;
						if(mysqli_num_rows($res)>0)
						{
							echo "<script>var confirm = confirm(\"book with the same ISBN is existed!\");
							if(confirm){ 
							window.history.back();
							}
								else{
							window.history.back();
							}
							</script>";
							
						}
						else{
						$sql= "insert into product(p_name,p_cat,p_brand,p_price,p_dis,p_desc,p_img,p_key,p_qty,p_seller) values('$name','$cat','$brand','$price','$dis','$des','$ipath','$keyw','$qty','$sel');";
						mysqli_query($con,$sql);
						
						header('location:Add_Product.php');
						}
					?>
			