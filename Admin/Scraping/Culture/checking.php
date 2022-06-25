<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$Main_Query="SELECT * FROM culture";
	$Result=mysqli_query($conn,$Main_Query);
    while($row = mysqli_fetch_assoc($Result)){
    	echo "<img src='".$row["image"]."'><br>";
    	echo $row["province_name"]."<br>";
    	echo $row["title"]."<br>";
    	echo $row["content"]."<br>";
	}
}
?>

