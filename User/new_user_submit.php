<?php
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

	if(isset($_POST["user_email"]) && isset($_POST["first_name"]) && isset($_POST["second_name"]) && isset($_POST["user_password"]))
	{
	  $first_name=$_POST["first_name"];
	  $second_name=$_POST["second_name"];
	  $email=$_POST["user_email"];
	  $password=$_POST["user_password"];

	  	$query = "SELECT email FROM Users_table WHERE email='".$email."'";
	  	$result=mysqli_query($conn,$query);
	  	 if(mysqli_num_rows($result)!=0){
			echo "<script>
			alert('User Exist With This Email');
			window.location.href='register.php';
			</script>";
	  	 }
	  	 else{
	  	 	$sql = "INSERT INTO users_table (email, password, first_name,second_name)
			VALUES ('".$email."','".$password."','".$first_name."','".$second_name."')";

			if (mysqli_query($conn, $sql)) {
				echo "<script>
				alert('Account Created Successfully');
				window.location.href='login.php';
				</script>";
			} 
			else {
		   		echo "<script>
				alert('Cannot Insert Record Please Try Again');
				window.location.href='register.php';
				</script>";
			}
	  	 }

	 }
	 else{
		   	echo "<script>
			alert('Cannot Insert Record Please Try Again');
			window.location.href='register.php';
			</script>";
	 }
	mysqli_close($conn);
}
?>