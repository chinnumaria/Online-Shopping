<?php
session_start();

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
						
						$qty=$_POST["txt_pqty"];
						$p_cat="SELECT * FROM product WHERE p_name = '$name';";
						$pcat=mysqli_query($con,$p_cat);
						$row=mysqli_fetch_assoc($pcat);
						$cat=$row["p_cat"];
						$brand=$row["p_brand"];
						$pid=$row["p_id"];
						$seller=$row["p_seller"];
						echo $cat;
						echo "</br>";
						echo $brand;
						echo "</br>";
						echo $pid;
						echo "</br>";
						echo $seller;
						echo "</br>";
						/* echo $name;*/
						
						$sle="SELECT * FROM e_product WHERE p_id = '$pid';";
						$rle=mysqli_query($con,$sle);
						$rol=mysqli_fetch_assoc($rle);
						
						 if(mysqli_num_rows($rle)>0)
						{
							echo "<script>var confirm = confirm(\"Request existed!\");
							if(confirm){ 
							window.history.back();
							}
								else{
							window.history.back();
							}
							</script>";
							
						} 
						 
						$sqlq= "update product set p_select='e' WHERE p_name = '$name' and p_id='$pid';";
						mysqli_query($con,$sqlq);
						$sql= "insert into e_product(p_pid,p_name,p_cat,p_brand,p_price,p_dis,p_desc,p_img,p_qty,p_seller) values('$pid','$name','$cat','$brand','$price','$dis','$des','$ipath','$qty','$seller');";
						 mysqli_query($con,$sql); 
						echo $sql;
						echo "</br>";
						 echo "<script>var confirm = confirm(\"Changes has been requested!\");
          if(confirm){ 
              window.location='seller_pview.php';
           }
		   else{
			   window.location='seller_pview.php';
		   }
          </script>";   
						 /* header('location:seller_pview.php');  */
						
					?>
			