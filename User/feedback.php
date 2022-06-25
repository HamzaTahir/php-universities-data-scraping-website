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
	$feedback_email = $feedback_content = "";

	if(isset($_POST["feedback_email"]) && isset($_POST["feedback_content"]))
	{
	  $feedback_email=$_POST["feedback_email"];
	  $feedback_content=$_POST["feedback_content"];

	  	 	$sql = "INSERT INTO feedback (email, feedback)
			VALUES ('".$feedback_email."','".$feedback_content."')";

			if (mysqli_query($conn, $sql)) {
				$arr = 1;
			} 
			else {
				$arr = 0;
			}
	}
	else{
		   	$arr = -1;
	}
}
	
	echo json_encode($arr);	
	mysqli_close($conn);
?>