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
	  
	if(isset($_POST["province_name"])){
		$province_name=$_POST["province_name"];
		$qry = "SELECT DISTINCT city_name from uni_details_table WHERE province_name = '".$province_name."'";
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