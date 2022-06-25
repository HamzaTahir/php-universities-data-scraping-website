<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
	$email = $password = "";

	if(isset($_POST["user_email"]) && isset($_POST["user_password"]))
	{
	  $email=$_POST["user_email"];
	  $password=$_POST["user_password"];
	  $sql = "SELECT first_name FROM users_table WHERE email='".$email."' AND password='".$password."'";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)==1){
	  	    $row=mysqli_fetch_assoc($result);
			$store_user_name =$row["first_name"];
			$store_user_name = "Welcome ". $store_user_name;
	   		$_SESSION["first_name"]=$store_user_name;
	   		echo "<script>window.location='index.php'</script>";
		}
	  else {
	   		echo "<script>
				alert('You Have Entered Invalid Login Details');
				window.location.href='login.php';
				</script>";
		}

	 }
	 else{
	   		echo "<script>
				alert('Cannot Login Please Try Again');
				window.location.href='login.php';
				</script>";
	 }
	mysqli_close($conn);
}
?>