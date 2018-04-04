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
						$name=$_POST["txt_pname"];
						$price=$_POST["txt_price"];
						$dis=$_POST["txt_pdis"];
						$des=$_POST["txt_des"];
						$keyw=$_POST["kwords"];
						$qty=$_POST["txt_pqty"];
						$p_cat="SELECT p_cat FROM product WHERE p_name = '$name';";
						$pcat=mysqli_query($con,$p_cat);
						$row=mysqli_fetch_assoc($pcat);
						$cat=$row["p_cat"];
						$p_br="SELECT p_brand FROM product WHERE p_name = '$name';";
						$pbr=mysqli_query($con,$p_br);
						$rows=mysqli_fetch_assoc($pbr);
						$brand=$rows["p_brand"];
						$p_sl="SELECT p_seller FROM product WHERE p_name = '$name';";
						$pslr=mysqli_query($con,$p_sl);
						$rowss=mysqli_fetch_assoc($pslr);
						$seller=$rowss["p_seller"];
						$p_id="SELECT p_id FROM product WHERE p_name = '$name';";
						$pid=mysqli_query($con,$p_id);
						$rowsss=mysqli_fetch_assoc($pid);
						$id=$rowsss["p_id"];
						$tit="SELECT p_name FROM product WHERE p_name = '$name';";
						$res=mysqli_query($con,$tit);
						/* echo $name;
						if(mysqli_num_rows($res)>0)
						{
							echo "<script>var confirm = confirm(\"product with the same name is existed!\");
							if(confirm){ 
							window.history.back();
							}
								else{
							window.history.back();
							}
							</script>";
							
						}
						else{ */
						$sqlq= "update product set p_select='e' WHERE p_name = '$name';";
						mysqli_query($con,$sqlq);
						$sql= "insert into e_product(p_id,p_name,p_cat,p_brand,p_price,p_dis,p_desc,p_img,p_key,p_qty,p_seller) values('$id','$name','$cat','$brand','$price','$dis','$des','$ipath','$keyw','$qty','$seller');";
						mysqli_query($con,$sql);
						
						header('location:seller_pview.php');
					?>
			