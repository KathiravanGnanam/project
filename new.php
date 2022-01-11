<?php 
  include "conf.php";
  session_start();
  
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Shopping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  

</head>
<body> -->
  <!-- <?php
   //date_default_timezone_set('Asia/Kolkata');
  $date//=//date('d-m-y h:i:s');
  //echo $date;
  ?> -->



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
<style >
  table,th,td{
    border:2px solid black;
    border-collapse: collapse;
    padding-left: 10px;
    padding-top: 10px;
    padding-bottom:  10px;
    padding-right: 10px;
  }
  #cate{
    padding:4px; 
  }
  table{
    margin-top: 150px;
    margin-left: 250px;
  }
  img{
    padding-left: 50px;
  }
  .img{
    display: inline;
  }
  footer{
  
    text-align: center;
  }
   
  .echo {
  float: left;
  width:50%;
  /*padding-left: 2px;*/
  border:2px solid white;
   
  
}
.echo:hover {
  -ms-transform: scale(1.1);  
  -webkit-transform: scale(1.1);  
  transform: scale(1.1); 
  background-color: #F0F3F4 ;
 border:2px solid  #B3B6B7  ;
}
.gallery1 {
  padding-left: 160px;
  font-size: 18px;
    }


.image:hover {
  -ms-transform: scale(1.1);  
  -webkit-transform: scale(1.1);  
  transform: scale(1.1); 
}
.rate{
   
    width: 50px;
    height: 30px;
    color: white;
    background-color: green;
      text-align: center;
    border-radius: 5px;
    
     font-size: 15px;
    
   
}  
.brand{
  padding-left: 35px;
}
.f{
  display: flex;
  flex-direction: row;
}

</style>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : jozzby@gmail.com
                </span>
              </a>
            </div>
            <form action="p.php" method="post" class="search_form">
            
              <input type="text" class="form-control" type="hidden" name="cate" placeholder="Search here...">
              <button type="submit" name="submit" class="">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
            <div class="user_option_box">
              <a href="complaint.php" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  Complaint
                </span>
              </a>
              <a href="viewCart.php" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  Cart
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                Jozzby
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.html">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="why.html">Why Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.html">Testimonial</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>

    
    

  
<!-- <div class="container">
  <div class="row">
      <h1 style="text-align: center;">Online Shopping</h1><hr>
     <form action="p.php" method="post">

 
 <input >

    <label for="category"></label>
<select id="cate" name="cate"  id="cate">
  <optgroup>
    <option selected disabled>== Select Category==</option>
  <option value="mdress">Mens Wear</option>
  <option value="gdress">women's Wear</option>
  <option value="hphone">Head Phone</option>
  <option value="k">Kitchen Sets</option>
  
  </optgroup>
</select>
<input type="submit" name="submit" class="btn btn-success" value="Search By">
 
 <input type="text" name="a" placeholder="Enter product name">
 <input type="submit" name="submit" class="btn btn-success" value="Search By">
 
</form> -->

 




<?php
 
 include "conf.php";
 
 


if(isset($_POST['submit']))
{ 
   
$cate=$_POST['cate'];
   
$query="SELECT * FROM  product where category ilike '%$cate%' ";
$res=pg_query($conn,$query);
   
   
 
   while($row=pg_fetch_array($res))
  {
    $cost=$row['pro_cost'];
    if($cost<=1000){
      $add=5;
    }
    else if($cost>1000&&$cost<=10000){
      $add=10;
    }
    else{
      $add=20;
    }
    $c=$cost*100/(100-$add);
    
     echo  '</header><div><div class="half">
    
   <div class="echo"><br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#10084;
<div class="image" > &emsp;&emsp;&emsp;  <img src="'.$row['image'].'" style="margin-top:50px; margin-left: 60px;margin-bottom: 13px; width: 250px; height: 200px;"> </div> 

 <div class="gallery1">
<p style="color:black;"><strong>'. $row['pro_name'] .'</strong></p>
<p style="font-size:15px;" > '. $row['para'] .' </p>
 <div class="f">
    <p>    <div class="rate"> <strong>'. $row['rating'] .'  &#9734 </strong></div></p> <br/>
    &emsp;<div class="r1"><s>&#8377;'.round($c).'</s></div></div>
    <p style="color:red;padding-left:35px;">   <strong>&#8377; '. $cost .'</strong>&emsp;&emsp;'.$add.'% off</p>
    <p>   <div class="brand" > <strong>'. $row['pro_brand'] .'    </strong>&#128722;</div></p>
    

    
    
  
    <p style="padding-left:20px;"><a href="view.php?id='. $row['pro_id'] .'" class="dd">View Details</a></p>

    </div>
    </div>
    </div>
  ';
   
   ?>
      
    <?php

  }
 }
 else{
  $query="SELECT * FROM  product";
$res=pg_query($conn,$query);
   
   
 
   while($row=pg_fetch_array($res))
  {
    $cost=$row['pro_cost'];
    if($cost<=1000){
      $add=5;
    }
    else if($cost>1000&&$cost<=10000){
      $add=10;
    }
    else{
      $add=20;
    }
    $c=$cost*100/(100-$add);
    
     echo  '</header><div><div class="half">
    
   <div class="echo"><br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#10084;
<div class="image" > &emsp;&emsp;&emsp;  <img src="'.$row['image'].'" style="margin-top:50px; margin-left: 60px;margin-bottom: 13px; width: 250px; height: 200px;"> </div> 

 <div class="gallery1">
<p style="color:black;"><strong>'. $row['pro_name'] .'</strong></p>
<p style="font-size:15px;" > '. $row['para'] .' </p>
 <div class="f">
    <p>    <div class="rate"> <strong>'. $row['rating'] .'  &#9734 </strong></div></p> <br/>
    &emsp;<div class="r1"><s>&#8377;'.round($c).'</s></div></div>
    <p style="color:red;padding-left:35px;">   <strong>&#8377; '. $cost .'</strong>&emsp;&emsp;'.$add.'% off</p>
    <p>   <div class="brand" > <strong>'. $row['pro_brand'] .'    </strong>&#128722;</div></p>
    

    
    
  
    <p style="padding-left:20px;"><a href="view.php?id='. $row['pro_id'] .'" class="dd">View Details</a></p>

    </div>
    </div>
    </div>
  ';
   ?>
      
    <?php

  }
 }


?>

</body>
</html>
