<?php
require 'simple_html_dom.php';

$html = file_get_html('http://www.ist.edu.pk/ee-undergraduate-bs-electrical-course-outline');


$html2 = file_get_html('http://www.ist.edu.pk/ee-undergraduate-bs-electrical');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$image = "http://www.ist.edu.pk/assets/img/logo.png";
$title = $html->find('div.header-slogan',0);
$roadmap = $html->find('table',0);
$description=$html2->find('p',0);
// echo "<img src='".$image."'>";
// echo $description;
// echo $roadmap;
// 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$Main_Query="SELECT * FROM uni_details_table
				 WHERE province_name='Punjab' AND city_name='Islamabad' AND field='BS(EE)'
				 AND uni_name='IST' ";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE uni_details_table SET uni_logo='".$image."',
			   field_description='".$description."',
			   field_roadmap='".$roadmap."'
			   WHERE province_name='Punjab' AND city_name='Islamabad' AND field='BS(EE)'AND uni_name='IST' ";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated IST University BS(EE) Field Data Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Error in Updation Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
	}
	else{
		$insert_query="INSERT INTO uni_details_table(	
					   province_name,city_name,uni_logo,uni_name,field,
   					   field_title,field_description,field_roadmap) 
					   VALUES('Punjab','Islamabad','".$image."','IST','BS(EE)',
					   '".$title."','".$description."','".$roadmap."')";
		
		if (mysqli_query($conn,$insert_query)) {
			echo "IST University Data BS(EE) Field Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Inseration Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>

