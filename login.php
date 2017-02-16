<?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from Form
	$username=mysqli_real_escape_string($db,$_POST['username']); 
	$password=mysqli_real_escape_string($db,$_POST['password']); 
	$password=md5($password); // Encrypted Password
	$sql="SELECT * FROM accounts WHERE username='$username' and pass='$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_assoc($result);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

	// If result matched $username and $password, table row must be 1 row
	if($count == 1) {
        $_SESSION['login_user'] = $username;
        $_SESSION['login_id'] = $row['id'];
        header("location: airbnb.php");
    } else {
        $error = "Your Login Name or Password is invalid";
        echo $error;
        echo '<br><button>
			<a href="signup.html" style="text-decoration : none;">Sign Up</a>
			</button>';
		echo '<br><button>
			<a href="airbnb.php" style="text-decoration : none;">Homepage</a>
			</button>';
	}
}
?>
