<?php
session_start();
?>
<?php
			$id=$_SESSION["txtusername"];
				$con=mysqli_connect("localhost","root","","os");
				$sq="select * from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$uid=$row["uid"];
			?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Elite Shoppy, Inc.
            <small class="pull-right"></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Elite Shoppy</strong><br>
            Email: EliteShoppy@gmail.com<br>
            Phone: (+91) 543123-5432<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
		  <?php $con=mysqli_connect("localhost","root","","os");
					$sqq="SELECT * FROM p_address where uid='$uid' and a_id in (SELECT MAX(a_id) AS maxi FROM p_address);";
					$rq=mysqli_query($con,$sqq);
					$req=mysqli_fetch_assoc($rq);
					$date=$req["curdate"];
					$name=$req["name"];
					$mob=$req["phone"];
					$adr=$req["address"];
					$loc=$req["locality"];
					$city=$req["city"];
					$pin=$req["pin"];
            echo "<strong> $name</strong><br>
             $adr,$loc,$city<br>
             Pin:  $pin<br>
             Phone: $mob<br>";
			?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
		<?php
		$con=mysqli_connect("localhost","root","","os");
		$s="SELECT MAX(invoice) AS maxi FROM purchase";
						$r=mysqli_query($con,$s);
						$re = mysqli_fetch_assoc($r);
						$inv=$re['maxi'];
		$sel_pd="SELECT * from purchase where invoice='$inv';";
						$res_pd=mysqli_query($con,$sel_pd);
						$rd = mysqli_fetch_array($res_pd);
						$dt=$rd['curdate'];
         echo " <b>Invoice: $inv</b><br>
				<b>Date: $dt</b><br>
        </div>";
		?>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              
              <th>Product</th>
			  <th>Qty</th>
			  <th>Price</th>
              <th>Discount</th>
			  <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
           
			<?php
			$sel_pr="SELECT * from purchase where invoice=$inv;";
						$res_pr=mysqli_query($con,$sel_pr);
						if(mysqli_num_rows($res_pr)>0)
						{
							while($rs = mysqli_fetch_array($res_pr))
							{
								$pid=$rs['pid'];
								$p="SELECT * from product where p_id='$pid';";
								$rp=mysqli_query($con,$p);
								$rep = mysqli_fetch_assoc($rp);
								$pn=$rep['p_name'];
								
								$price=$rs['price'];
								$qty=$rs['qty'];
								$dis=$rs['dis'];
								$sub=$rs['subt']; 
              echo " <tr>
			  <td>$pn</td>
              <td>$qty</td>
              <td>$price</td>
              <td>$dis</td>
              <td>$sub</td>
							
            </tr>";
			}
						}
			  ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">

        </div>
        <!-- /.col -->
        <div class="col-xs-6">
		
          <p class="lead" style="font-weight: bold;">Amount</p>

          <div class="table-responsive">
            <table class="table">
			<?php
		$sl_pr="SELECT * from purchase where invoice=$inv;";
						
						$rs_pr=mysqli_query($con,$sl_pr);
						 $rse = mysqli_fetch_array($rs_pr);
						 $dc=$rse['dc'];
						 $tot=$rse['t_price'];
						 $tp=$tot+50;
              echo "<tr>
                <th style='width:50%'>Subtotal:</th>
                <td>$tot</td>
              </tr>
              <tr>
                <th style='width:50%'>Delivery Charge:</th>
                <td>50</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>$tp</td>
              </tr>";
			  ?>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12" align="right">
          <a href="invoice_print.php" target="_blank"  class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          
         
        </div>
      </div>
    </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
