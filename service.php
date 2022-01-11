<?php 
  include "conf.php";
  
 if (isset($_POST['submit'])) {
  $product_id= $_POST['pid'];
  
    $sql="UPDATE service set status='SOLVED' where product_id='$product_id'";
    $query=pg_query($conn,$sql);
  }
  
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
    background-color:#F5FFFA;
  }
</style>
<body><br/><br/>

  <h1 style="padding-left: 450px;color:#4B0082">ISSUE DETAILS</h1><br/>
  <table class="table"> 
              <tr>
                <th>Service ID</th>                 
                <th>Product Id</th>
                <th>Name of the Issue</th>
                <th>Status</th>
                <th>Update</th>
              </tr>
              <?php
              include 'conf.php';
              $sql="SELECT * FROM service";
              $query=pg_query($conn,$sql);
              while($row=pg_fetch_array($query)){
                if($row['status']=='Pending...'){
                  echo '<tr>
                          <td>'.$row["service_id"].'</td>                           
                          <td>'.$row['product_id'].'</td>
                          <td>'.$row['issue_type'].'</td>
                          <td style="color:red;">'.$row['status'].'</td>
                          <td><form action="service.php" method="POST"><input type="hidden" name="pid"   value='.$row['product_id'].'><button  name="submit" class="btn btn-success">UPDATE</button>
                           </form></td>  
                              
                      </tr>'; 

                }
                else{
                  echo '<tr>
                          <td>'.$row["service_id"].'</td>                           
                          <td>'.$row['product_id'].'</td>
                          <td>'.$row['issue_type'].'</td>
                          <td style="color:green;">'.$row['status'].'</td>
                          <td><form action="service.php" method="POST"><input type="hidden" name="pid"   value='.$row['product_id'].'><button  name="submit" class="btn btn-success" disabled>UPDATE</button>
                          </form></td>  
                              
                      </tr>'; 
                }
                
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