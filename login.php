<?php 

include 'conf.php';

session_start();

error_reporting(0);

  

 if (isset($_POST['sub'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$s = "SELECT * FROM login WHERE email_id='$email'";
	$res = pg_query($conn, $s);
	$row=pg_fetch_array($res);
	 
	if($row['password']==$password){
		$sql = "SELECT * FROM login WHERE email_id='$email' AND password='$password'";
	   $result = pg_query($conn, $sql);
		if (pg_num_rows($result) > 0) {
			$row = pg_fetch_assoc($result);
			$_SESSION['id'] = $row['user_name'];
			$_SESSION['name']=$row['email_id'];
			// echo  $_SESSION['name'];
			// echo  $_SESSION['id'];
		 	$name=$row['user_name'];
			header("location:p.php");
		} 
		else {
			echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		}
	}else{
		echo"<script>alert('Woops! Password is Wrong.')</script>";
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
		 
			<h1>Login Here</h1>

			<br/>
			<form action="" method="post">
			<p> Email</p>
			<input type="email" name="email" id="email" value="<?php echo $email;?>" placeholder="Enter Username" required />
			<p>Password</p>
			<input type="Password" name="password" id="password" value="<?php echo $_POST['password']?>" placeholder="Enter Password" required/><br/><br/><br/>
			<div class="sub"><input class="btn btn-success" type="submit" name="sub" value="Login"><br/></div>
			<br/><a style="color: #ff0000;" href="#" >Forget Password</a><br/>
			No Account?<br/>Create Account &emsp;<span><a style="color: #ff0000;" href="forms.php">Pls Sign In</a></span>
		</form>		
		

	</div>




<br/>

<marquee style="font-size:25px" direction="right" ><a style="color: green" href="admin.php">ADMIN LOGIN</a></marquee>

</marquee>
</body>

</html>
 