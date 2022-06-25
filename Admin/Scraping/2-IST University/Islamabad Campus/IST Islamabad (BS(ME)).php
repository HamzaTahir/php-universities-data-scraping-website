<?php
require 'simple_html_dom.php';

$html = file_get_html('http://www.ist.edu.pk/me-undergraduate-bs-mechanical-engineering-course-outline');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$image = "http://www.ist.edu.pk/assets/img/logo.png";
$title = $html->find('div.header-slogan',0);
$roadmap = $html->find('table',0);
$description="The Department of Mechanical Engineering runs an internationally recognized academic program in Mechanical Engineering (ME) with different specializations at undergraduate and graduate levels. The department was established in 2002 and started offering degree in Communication Systems Engineering (CSE). In 2009, keeping in view the expanding focus, the department was renamed as Mechanical Engineering Department. The Department consists of experienced faculty, well-equipped classrooms and state-of-the-art lab facilities. The department provides continuous academic improvement through consultation with faculty, industry, electronics & communication engineering professionals and students. The focus of the courses is on the design, analysis, development and testing of communication & electronic systems encompassing latest international research trends.

The curriculum is designed to provide all-rounder experience to students in fundamental principles and application of electronics, embedded systems, signal analysis, electromagnetic, antennas, digital communications, digital signal processing, image processing, wireless technologies, fiber-optics and satellite systems. The curriculum provides the students a chance to study a variety of courses over the period of four years.";
// echo "<img src='".$image."'>";
// echo $title;
// echo $description;
// echo $roadmap;
// 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$Main_Query="SELECT * FROM uni_details_table
				 WHERE province_name='Punjab' AND city_name='Islamabad' AND field='BS(ME)'
				 AND uni_name='IST' ";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE uni_details_table SET uni_logo='".$image."',
			   field_description='".$description."',
			   field_roadmap='".$roadmap."'
			   WHERE province_name='Punjab' AND city_name='Islamabad' AND field='BS(ME)'AND uni_name='IST' ";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated IST University BS(ME) Field Data Scraped From It's Website And Stored In Database";
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
					   VALUES('Punjab','Islamabad','".$image."','IST','BS(ME)',
					   '".$title."','".$description."','".$roadmap."')";
		
		if (mysqli_query($conn,$insert_query)) {
			echo "IST University Data BS(ME) Field Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Inseration Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>

