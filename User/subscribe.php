<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   	$arr = -1;
}
else {
	$subscribe_email = "";

	if(isset($_POST["subscribe_email"]))
	{
	  $subscribe_email=$_POST["subscribe_email"];

	  	 	$sql = "INSERT INTO subscribe (email)
			VALUES ('".$subscribe_email."')";

			if (mysqli_query($conn, $sql)) {
				$arr = 1;
			} 
			else {
		   		$arr = 0;
			}
	}
	else{
			$arr = 0;
	}
	
}
	echo json_encode($arr);	
	mysqli_close($conn);
?>