<?php
include 'conf.php';
if(isset($_POST['submit'])){
	$pro_id=$_POST['pro_id'];
	$pro_name=$_POST['pro_name'];
	$brand=$_POST['brand'];
	$warranty=$_POST['warranty'];
	$cost=$_POST['cost'];
	$availability=$_POST['availability'];
	$location=$_POST['location'];
	$rating=$_POST['rating'];
	$sql=pg_query($conn,"INSERT INTO product values('$pro_id','$pro_name','$brand','$warranty','$cost','$availability','$location','$rating')");


}
if(isset($_POST['subm'])){
	$pro_id=$_POST['pro_id'];
	$column=$_POST['cate'];
	$value=$_POST['update'];
	$sql=pg_query($conn,"UPDATE product set $column=$value where pro_id=$pro_id");
	// if($sql){
	// 	echo"hi";
	// }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
	<title>Register Form</title>
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
	body{
		background-color: #FFE4B5;
	}
	.main {
  display: flex;
  flex-direction: row;
  font-size: 15px;
  text-align: center;
}
.c1{
	flex-direction: column;
}
.container1{
  width: 600px;
  border: 2px solid brown;
  padding: 50px;
  margin: 20px;
  height:550px;
  background-color:#FFDAB9;
}
.c1{
  width: 600px;
  border: 2px solid brown;
  padding: 50px;
  margin: 20px;
  height:300px;
  background-color:#FFDAB9;
}
h1{
	font-size: 30px;
	color: #000080;
}

</style>
<body>
	<a style="color:blue;size:20px;padding-left: 20px;font-size: 15px;" href="onlineshoppings.html">Home</a>
 
		<div class="main">
	<div class="container1">
		
            <h1>INSERT DATA</h1>
            <form action="" method="POST" class="login-email">
            <div class="input-group">PRODUCT ID&emsp;&emsp;&emsp;&emsp;
				<input type="text" placeholder="PRODUCT ID" name="pro_id"   required>
			</div><br/>                                                                                                                                                          
			<div class="input-group">PRODUCT NAME&emsp;&emsp;
				<input type="text" placeholder="PRODUCT NAME" name="pro_name"   required>
			</div><br/>
			<div class="input-group"><!-- &emsp;&emsp;&emsp; -->BRAND&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;<input type="text" placeholder="BRAND" name="brand"   required>
			</div><br/>
			<div class="input-group">WARRANTY&emsp;&emsp;&emsp;&emsp;&emsp;
				<input type="text" placeholder="WARRANTY" name="warranty"   required>
			</div><br/>
			<div class="input-group"><!-- &emsp;&emsp;&emsp; -->COST&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<input type="text" placeholder="COST" name="cost"   required>
			</div><br/>
			<div class="input-group">AVAILABILITY&emsp;&emsp;&emsp;&emsp;
				<input type="number" placeholder="AVAILABILITY" name="availability"  required>
			</div><br/>
			<div class="input-group"><!-- &emsp;&emsp;&emsp; -->ENTER THE LOCATION
				<input type="text" placeholder="LOCATION" name="location"   required>
            </div><br/>
            <div class="input-group">RATING&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<input type="text" placeholder="RATING" name="rating"   required>
			</div><br/>
			 
			<div class="tt">
				<button  name="submit" class="btn btn-success">SUBMIT</button>
			</div><br/>

			 
		</form>
	</div>
	<div class="c1">
		<div class="column1">
		<form action="" method="post">
			<h1>UPDATE DATA</h1>
			<div class="input-group">&emsp;&emsp;&emsp;PRODUCT ID&emsp;
				<input type="text" placeholder="PRODUCT ID" name="pro_id"   required>
			</div><br/>SELECT CATEGORY
		<select id="cate" name="cate"  >
  <optgroup>
    <option selected disabled>== Select Category==</option>
  <option value="pro_warranty">Pro Warranty</option>
  <option value="pro_cost">Pro Cost</option>
  <option value="pro_availability">Availability</option>
  <option value="image">image</option>
  
  </optgroup>
</select><br/><br/>
<div class="input-group">&emsp;&emsp;&emsp;ENTER THE UPDATE&emsp;
				<input type="text" placeholder="UPDATE" name="update"   required>
            </div><br/>
<div class="tt">
				<button  name="subm" class="btn btn-success">SUBMIT</button>
			</div><br/>
</form></div>
<div class="column2"><br/><br/><br/>
	<a style="color:blue;size:20px;padding-top:85%; padding-left: 30px;font-size: 25px;" href="product_details.php">PRODUCT DETAILS</a>
 
</div>
	</div>
</div>
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