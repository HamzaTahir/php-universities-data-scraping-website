<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$arr = array();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
	  
	if(isset($_POST["city_name"])){
		$city_name=$_POST["city_name"];
		$qry = "SELECT * from uni_table WHERE city = '".$city_name."'";
			$result = mysqli_query($conn,$qry);
			while($row = mysqli_fetch_assoc($result)){
				$arr[] = $row;
				}
			echo json_encode($arr);	
	}
	else {
		echo "<script>
				alert('Please Select Again');
				window.location.href='index.php';
			  </script>";
	}
	
}
mysqli_close($conn);

?>