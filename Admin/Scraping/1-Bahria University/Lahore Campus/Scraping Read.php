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
		
	
	$query="SELECT * FROM uni_details_table";
	$result=mysqli_query($conn,$query);
	 while($row = mysqli_fetch_assoc($result)){
		echo $row["id"]."<br><br>";
		echo $row["province_name"]."<br><br>";
		echo $row["city_name"]."<br><br>";
		echo "<img src='".$row["uni_logo"]."'></img>";
		echo $row["uni_name"]."<br><br>";
		echo $row["field"]."<br><br>";
		echo $row["field_title"]."<br><br>";
		echo $row["field_description"]."<br><br>";
		echo $row["Semester_1"]."<br><br>";
		echo $row["Semester_2"]."<br><br>";
		echo $row["Semester_3"]."<br><br>";
		echo $row["Semester_4"]."<br><br>";
		echo $row["Semester_5"]."<br><br>";
		echo $row["Semester_6"]."<br><br>";
		echo $row["Semester_7"]."<br><br>";
		echo $row["Semester_8"]."<br><br>";


		// echo "Bahria University Data Scraped From It's Website And Stored In Database";
	}
	// else{
	// 	echo "Error Please Try Again Later";
	// }
	mysqli_close($conn);
	// serialize($roadmap);
	// print_r($table[0]);
	// print_r($roadmap);
	// echo "<img src='".$image->src."'>";
	// echo $title->plaintext."<br>\n";
	// echo $description->plaintext."<br>\n";

	// $a=1;
	// for ($i=0; $i <8 ; $i++) {
		// echo "Semester ".$a;
	// 	echo $roadmap[$i]."<br>\n";
	// 	// $a++; 
	// }

}
?>