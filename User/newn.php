<?php

				$con=mysqli_connect("localhost","root","","os");
				$sq="select * from registration where uid='24';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$uid=$row["uid"];
				$uname=$row["name"];
				echo $uname;
				
				$arr = explode(' ',trim($uname));
    echo $arr[0];

				
				
				

?>