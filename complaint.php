<?php
include 'conf.php';
if(isset($_POST['submit'])){
	 $pro_id=$_POST['pro_id'];
	 $type=$_POST['type'];
	 $sql="INSERT INTO service (product_id,issue_type,status)values($pro_id,'$type','Pending...')";
	 $query=pg_query($conn,$sql);

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
		background-color:#F5F5DC;
    font-size: 15px;
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
  padding: 20px;
  padding-left: 100px;
  margin: 50px;
   
  background-color:#FFDAB9;
}
 
h1{
	font-size: 30px;
	color: #000080;
}

</style>
<body>
	<a style="color:red;size:20px;padding-left: 20px;font-size: 15px;" href="onlineshoppings.html">Home</a>
 
		<div class="main">
	<div class="container1">
		
            <h1>COMPLAINT FORM</h1><br/>
            <form action="" method="POST" class="login-email">
            <div class="input-group">PRODUCT ID&emsp;&emsp;&emsp;&emsp;
				<input type="text" placeholder="PRODUCT ID" name="pro_id"   required>
			</div><br/>                                                                                                                                                          
			
			<div class="input-group"><!-- &emsp;&emsp;&emsp; --> ISSUE TYPE&emsp;&emsp;&emsp;&emsp;				<input type="text" placeholder="" name="type"   required>
			</div><br/>
			  
			<div class="tt">
				<button  name="submit" class="btn btn-success">SUBMIT</button>
			</div><br/>

			 
		</form>
	</div><div><br/><br/><br/><br/><br/><p style="font-size:18px;">"If you have time to whine and complain about something then you have the time to do something about it"</p><br/><p style="font-size:18px;">"Customer complaints are source of innovation"</p><br/><p style="font-size:18px;">"Customer Service is not a department ...it's everyone's job"</p></div></div><br/><br/><br/><br/><br/><br/><br/><br/>
	 
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