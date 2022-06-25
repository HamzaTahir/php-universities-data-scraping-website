<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   	echo "<script>
			alert('Connection Error');
			window.location.href='contact.php';
		  </script>";
}
else {

	if(isset($_POST["name"]) && isset($_POST["phone"]) &&
	   isset($_POST["email"]) && isset($_POST["message"]))
	{
	  $name=$_POST["name"];
	  $phone=$_POST["phone"];
	  $email=$_POST["email"];
	  $message=$_POST["message"];

	  	 	$sql = "INSERT INTO contact_us_table (name,phone,email,message)
			VALUES ('".$name."','".$phone."','".$email."','".$message."')";

			if (mysqli_query($conn, $sql)) {
				echo "<script>
					alert('Contact Information Add');
					window.location.href='contact.php';
					</script>";
			} 
			else {
		   		echo "<script>
						alert('Error While Adding Information');
						window.location.href='contact.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);

			}
	}
	else{
			echo $name;
			echo $email;
			echo $phone;
			echo $message;
	}
	
}
	mysqli_close($conn);
?>