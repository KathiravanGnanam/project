<?php 

include 'conf.php';

session_start();

error_reporting(0);

if (isset($_SESSION['user_name'])) {
    header("wel.php");
}

if (isset($_POST['sub'])) {
	$id = $_POST['id'];
	$name = ($_POST['name']);

	$sql = "SELECT * FROM admin WHERE admin_id='$id' AND adm_name='$name'";
	$result = pg_query($conn, $sql);
	$row=pg_fetch_assoc($result);
	if (pg_num_rows($result)==1) {
		
		if($row['adm_work']=='production'){
			header("Location:prod.php");
		}
		else if($row['adm_work']=='sales'){
			header("Location:sales.php");
		}
		else if($row['adm_work']=='issues'){
			header("Location:service.php");
		}
 		else{
 			header("Location:mang.php");
 		}
		
	} else {
		echo "<script>alert('Woops! Something went Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>log In </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
<link rel="stylesheet" href="log.css">
 
</head>
 
<body> 
		 <a style="color:red;padding-left: 20px;size:20px;" href="onlineshoppings.html">Home</a>
	<div class="login">
		 
			<h1>Admin Login</h1>

			<br/>
			<form action="" method="post">
			<p> Admin_id</p>
			<input type="text" name="id"    placeholder="Admin ID" required />
			<p>Name</p>
			<input type="text" name="name"    placeholder="Enter Name" required/><br/><br/><br/>
			<div class="sub"><input class="btn btn-success"  type="submit" name="sub"   value="Login"><br/></div>
			<br/> 
		</form>		
		

	</div>




<br/>

 
</body>

</html>