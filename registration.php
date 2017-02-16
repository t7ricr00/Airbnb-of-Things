<?php
	include("db.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	// username and password sent from Form
		$username=mysqli_real_escape_string($db,$_POST['username']); 
		$password=mysqli_real_escape_string($db,$_POST['password']); 
		$email=mysqli_real_escape_string($db,$_POST['email']); 
		$phone=mysqli_real_escape_string($db,$_POST['phone']); 
		$zipcode=mysqli_real_escape_string($db,$_POST['zipcode']); 
		$city=mysqli_real_escape_string($db,$_POST['city']); 
		$address=mysqli_real_escape_string($db,$_POST['address']); 
		$fname=mysqli_real_escape_string($db,$_POST['fname']); 
		$lname=mysqli_real_escape_string($db,$_POST['lname']); 
		$password=md5($password); // Encrypted Password
		$sql="INSERT INTO accounts (username,pass,email,phone,zip,city,addressline,FirstName,LastName) VALUES ('$username','$password','$email','$phone','$zipcode','$city','$address','$fname','$lname');";
		$result=mysqli_query($db,$sql);
		echo "Registration Successfully";
	}
?>
<button>
	<a href="airbnb.php" style="text-decoration : none;">Back</a>
</button>
