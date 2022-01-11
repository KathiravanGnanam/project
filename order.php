<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Jozzby</title>
  </head>
  <style>
  	p{
  		padding-left: 320px;
  		padding-top: 90px;
  		font-size: 40px;
  		color:#9400D3;
  	}
  	body{
  		background-color:yellow ;
  	}
  </style>
  <body>
  	<?php
  	echo '<p>';
  	echo 'Successfully completed your order  '.$_SESSION['id'];
  	echo '</p>';
  	 ?>
  	 <br/><br/><br/><!-- <br/><br/><br/> -->&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  	 <video width="820" height="440" controls autoplay>
  <source src="images/order.mp4" type="video/mp4">

</video>
  </body>

  </html>
