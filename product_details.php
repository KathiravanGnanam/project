<?php 
  include "conf.php";
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

  <title>ecommerce</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<style>
  body{
    background-color:#FAEBD7;
  }
</style>
<body><br/><br/>

  <h1 style="padding-left: 450px;color:#008000;">PRODUCT DETAILS</h1><br/>
  <table class="table"> 
              <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Product Warranty</th>
                <th>Product Cost</th>
                <th>Product Availability</th>
                 <th>Product Brand</th>
               
                 
              </tr>
              <?php
              include 'conf.php';
              $sql="SELECT * FROM product";
              $query=pg_query($conn,$sql);
              while($row=pg_fetch_array($query)){
                echo '<tr>
                          <td>'.$row["pro_id"].'</td>
                          <td>'.$row['pro_name'].'</td>
                          <td><img src='.$row['image'].' width="40" hight="25"></td>
                          <td>'.$row['pro_brand'].'</td>
                          <td>'.$row['pro_warranty'].'</td>
                          <td>'.$row['pro_cost'].'</td>
                          <td>'.$row['pro_availability'].'</td>
                          
                          
                              
                              
                      </tr>'; 
              }
              ?>

      </table>
</body>
<footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Jozzby</a>
      </p>
    </div>
  </footer>
</html>