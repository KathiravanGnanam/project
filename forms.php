<?php 

include 'conf.php';



session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];
	 

	if ($password == $cpassword) {

		$sql = "SELECT * FROM login WHERE email_id='$email'";
		$result = pg_query($conn, $sql);
		if (!pg_num_rows($result) > 0) {
			$sql = "INSERT INTO login (user_name, email_id, password)
					VALUES ('$username', '$email', '$password')";
			  
			$sql1="INSERT INTO customer (cus_name, gender,phone_num,cus_city)
					VALUES ('$username','$gender','$phone','$city')";

			pg_query($conn,$sql1);
			
			$result = pg_query($conn, $sql);
			if ($result) {
				


  			$row=pg_fetch_array($query_run);
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				$gender="";
	            $phone="";
	            $city="";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
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

	<link rel="stylesheet" type="text/css" href="r1style.css">


	<title>Register Form</title>
</head>
<body>
	<a style="color:red;size:20px;padding-left: 20px;" href="onlineshoppings.html">Home</a>
 
		
	<div class="container">
		
            <h1>Register</h1>
            <form action="" method="POST" class="login-email">
			<div class="input-group">Username&emsp;
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div><br/>
			<div class="input-group">&emsp;&emsp;&emsp;Email
			&emsp;&emsp;&emsp;<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div><br/>
			<div class="input-group">Gender&emsp;&emsp;&emsp;
				<input type="text" placeholder="Gender" name="gender" value="<?php echo $gender; ?>" required>
			</div><br/>
			<div class="input-group">&emsp;&emsp;&emsp;Phone
				<input type="text" placeholder="Phone" name="phone" value="<?php echo $phone; ?>" required>
			</div><br/>
			<div class="input-group">City&emsp;&emsp;&emsp;
				<input type="text" placeholder="City" name="city" value="<?php echo $city; ?>" required>
			</div><br/>
			<div class="input-group">&emsp;&emsp;&emsp;Password&emsp;
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div><br/>
            <div class="input-group">Re-Password
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div><br/>
			 
			<div class="tt">
				<button  name="submit" class="btn btn-success">Register</button>
			</div><br/>
			<p class="login-register-text">Have an account? <a style="color: #ff0000;" href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html> 