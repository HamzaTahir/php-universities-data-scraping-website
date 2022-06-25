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

	if(isset($_POST["admin_email"]) && isset($_POST["admin_first_name"]) && isset($_POST["admin_second_name"]) && isset($_POST["admin_password"]))
	{
	  $first_name=$_POST["admin_first_name"];
	  $second_name=$_POST["admin_second_name"];
	  $email=$_POST["admin_email"];
	  $password=$_POST["admin_password"];

	  	$query = "SELECT email FROM admin_table WHERE email='".$email."'";
	  	$result=mysqli_query($conn,$query);
	  	 if(mysqli_num_rows($result)!=0){
			echo "<script>
			alert('Admin Exist With This Email');
			window.location.href='new_admin_register.php';
			</script>";
	  	 }
	  	 else{
	  	 	$sql = "INSERT INTO admin_table (email, first_name,second_name, password)
			VALUES ('".$email."','".$first_name."','".$second_name."','".$password."')";

			if (mysqli_query($conn, $sql)) {
				echo "<script>
				alert('Account Created Successfully');
				window.location.href='admin_login.php';
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