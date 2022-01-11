<?php 
	include "conf.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online shopping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <style>
 	.flex-main{
 		display: flex;
 		flex-direction: row;
 	}
 	.s{
 		display: flex;
 		flex-direction: column;
 	}
 	.sub1{
 		padding-left: 60px;

 	}
 	.sub2{
 		padding-left: 60px;
 	}

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
 	.image{
 		border:1px solid #B3B6B7 ;
 		background-color: #F0F3F4;
 		border-radius: 12px;
 	}
 </style> 
<div class="container">
  <div class="row">
			<h1>Add To Cart </h1><hr>
			<a href='viewCart.php'>View Cart</a><br/>
			<?php 
			include "conf.php";

			if(isset($_POST['sub'])){
				$name=$_POST['rev'];
				$id=$_GET["id"];
				$nam=$_SESSION['id'];
				$sq=pg_query($conn,"INSERT into review values('$nam','$id','$name')");
			}
			if(isset($_POST["addCart"])){
				if(isset($_SESSION["cart"]))
				{
					$pid_array=array_column($_SESSION["cart"],"pid");
					if(!in_array($_GET["id"],$pid_array))
					{
						$index=count($_SESSION["cart"]);
						$item=array(
							'pid' => $_GET["id"],
							'pname' => $_POST["pname"],
							'price' => $_POST["price"],
							'qty' => $_POST["qty"]
						);
						$_SESSION["cart"][$index]=$item;
							echo "<script>alert('Product Added..');</script>";
						header("location:viewCart.php");
					}
					else
					{
						echo "<script>alert('Already Added..');</script>";
					}
				}
				else
				{
						$item=array(
							'pid' => $_GET["id"],
							'pname' => $_POST["pname"],
							'price' => $_POST["price"],
							'qty' => $_POST["qty"]
						);
						$_SESSION["cart"][0]=$item;
						echo "<script>alert('Product Added..');</script>";
						header("location:viewCart.php");
				}
			}
			 
 
			   
			$query = "SELECT * FROM  product where pro_id={$_GET["id"]}    ";
  			$query_run=pg_query($conn,$query);
			if(pg_num_rows($query_run)>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=pg_fetch_array($query_run))
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
			echo  '<br/>
     <div class="flex-main">
     <div class ="s"><div class="image" >   <div><br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&#10084;</div> <img src="'.$row['image'].'" style="margin-top:40px; margin-left: 60px;margin-bottom: 65px;margin-right:40px; width: 320px; height: 260px;"></div><div><p style="padding-left: 10px; padding-top: 10px;">  <input type="submit" name="addCart" class="btn btn-success" value="Add to Cart"></p> </div> </div>
     
     <div class="sub1">
     <p style="font-size:25px;"><strong><a href="#">'. $row['pro_name'] .'</a></strong></p>
     <p  style="color:black;">'. $row['para'] .'</p>
     <p>    <div class="rate"> <strong>'. $row['rating'] .'  &#9734 </strong></div></p> 
     <p style="color:red;font-size:16px;"><strong> &#8377;'. $cost .'&emsp;&emsp;<s style="color:black;font-size:15px;">&#8377;'.round($c).'</s> &emsp;'.$add.'% off</strong></p>
      <p style="font-size:30px;"><strong>Availability : '. $row['pro_availability'] .'    &#128722;</strong> </p>
      <p><strong><a href="#">BRAND : ' .$row['pro_brand'] .'</a></strong></p>
     <h4 class="text-danger"> Rs.'. $row['pro_cost'] .'</h4>
     <p> 7 Days Replacement Policy </p>

     <input type="radio" name="ck" value="cash" checked>Free Delivery<br/>
     <input type="radio" name="c" value="credit" checked>Credit Card<br/>
 	
    
      
	<p><input type="text"  placeholder="Enter Qty" name="qty"  class="form-control"></p>
	<p><input type="hidden"  name="pname" value="'. $row['pro_name'] .'" class="form-control"></p>
	<p><input type="hidden"  name="price" value="'. $row['pro_cost'] .'" class="form-control"></p>
	
	</div>
	<div class="sub2">
	</form>

	<form action="" method="POST">
     REVIEW:

     <input type="text" name="rev" >
     <input type="submit" name="sub" class="btn btn-success" >
     </form>
     <br/>';
     $r=$row['pro_id'];
     $q = "SELECT * FROM  review where rev_id=$r";
  	$q_run=pg_query($conn,$q);
   
  	while($rows=pg_fetch_array($q_run)){
  		echo '<p ><span style="font-size:20px; color:blue;">'.$rows['name'].'&nbsp;  : </span>  ';
  		echo $rows['para'];
  		echo '</p>';

  	}
  

echo'
	</div>
    </div>
    <b/>
   ';
				}
				
			}
			'<form action="trans.php" method="post">
     <input type="radio" name="c" value="cash">Cash On Delivery<br/>
     <input type="radio" name="c" value="credit">Credit Card<br/>

     </form>';
     
  	
			 
			?>
			
  </div>
</div>

</body>
</html>
