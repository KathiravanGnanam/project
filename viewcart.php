<?php 
	

	session_start();

include 'conf.php';
if(isset($_POST['sub'])){
	 
	echo"<script>alert('UPDATED')</script>";
	foreach($_SESSION["cart"] as $keys=>$values){
		 
		$id=$values["pid"];
		$qty=$values["qty"];
		$query = "SELECT * FROM  product where pro_id= $id";

		$query_run=pg_query($conn,$query);
		$row=pg_fetch_array($query_run);


		$nam=$row['pro_name'];
		$proid=$row['pro_id'];
		$prowarr=$row['pro_warranty'];
		$procost=$row['pro_cost'];
		$availability=$row['pro_availability'];

		$NewQuantity=$availability-$qty;

		$update="UPDATE product set pro_availability=$NewQuantity where pro_id=$proid";
		$up=pg_query($conn,$update);

		$email=$_SESSION['name'];
		$query = "SELECT * FROM  customer where cus_id in (select login_id from login where email_id='$email')";
		$query_run=pg_query($conn,$query);
		$row=pg_fetch_array($query_run);
		$Customer_id=$row['cus_id'];

		$sql="INSERT INTO sales (sales_id,pro_name,pro_id,pro_warranty,pro_cost,quantity,date_time,cus_id) 
		values(default,'$nam',$proid,'$prowarr',$procost,$qty,current_date,$Customer_id) ";
		$s=pg_query($conn,$sql);

	}
	header("location:order.php");
	
}

		

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
	table th,td{
		border: 2px solid black;
		border-collapse: collapse;
	}
</style>
<body>
	
<div class="container">
  <div class="row">
  			<?php 
				include 'conf.php';
				
				  	echo '<h1>Cart Items</h1><hr>
						<a href="onlineshopping.php">Home</a>
						<table class="table">	
							<tr>
								<th>Item Name</th>
								<th>Product ID</th>
								<th>Qty</th>
								<th>Price</th>
								<th>Total</th>
								<th>Remove</th>
							</tr>';
							
							if(isset($_GET["del"]))
							{
								 

								foreach($_SESSION["cart"] as $keys=>$values)
								{
										if($values["pid"]==$_GET["del"])
										{
											unset($_SESSION["cart"][$keys]);
										}
								}
							}
							else{
									if(!empty($_SESSION["cart"]))
								{ 
									 
									
									
										$total=0;
										foreach($_SESSION["cart"] as $keys=>$values)
										{
											$amt=$values["qty"]*$values["price"];
												$total+=$amt;
												echo "
														<tr>
															<td>{$values["pname"]}</td>
															<td>{$values["pid"]}</td>
															<td>{$values["qty"]}</td>
															<td>{$values["price"]}</td>
															<td>{$amt}</td>
															<td><a href='viewCart.php?del={$values["pid"]}'>Remove</a></td>
														</tr>
												";
												
										}	
											echo "
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td>Total</td>
															<td>{$total}</td>
														</tr>";							
										echo '<p><input type="hidden"  name="total"  value="$total" class="form-control"></p>';

									}
									
								
							?>
						</table>
						<p>"NOTE THE PRODUCT ID FOR THE FUTURE REFERENCE"</p>
			  </div>
			</div><?php 
			 
			echo '<form action="viewcart.php" method="POST">
 
     
     <input type="submit" name="sub" class="btn btn-success" value="place order">
     </form>
     <br/>';
							};
							  
			
 ?>
</form>
</body>
</html>