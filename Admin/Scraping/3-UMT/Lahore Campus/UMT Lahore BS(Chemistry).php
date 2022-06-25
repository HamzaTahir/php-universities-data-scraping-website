<?php
require 'simple_html_dom.php';

$html = file_get_html('https://ssc.umt.edu.pk/Programs/Undergraduate-Programs/BS-Chemistry-Curriculum.aspx');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$image = "https://ssc.umt.edu.pk/style/images/ssc-logo.png";
$title = $html->find('div.col-lg-12',1);
$title = $title->find('h2',0);

$roadmap = $html->find('table');
$description = "Chemistry is the science of the structure, properties, and reactions of matter. It is both a basic science, fundamental to an understanding of the world we live in, and a practical science with an enormous number and variety of important applications. Knowledge of chemistry is fundamental to an understanding of biology and biochemistry and of certain aspects of geology, astronomy, physics, and engineering. The most important motivation for concentration in Chemistry is an intrinsic interest in the subject. The Degree and Courses offered in Chemistry designed according to the scheme of studies approved by the Higher Education Commission (HEC) of Pakistan so as to meet the national and international standards.
	Courses offered at the department of chemistry have the benefit of a flexible curricular program capable of preparing them for advance studies in Chemistry as well as careers in teaching and research institutes. Research is the key to success in this dynamic world today. The department encourages the students to participate in the research projects, and provide them with possible facilities and guidance. Students will involve for full-time research both at UMT and other research institutes. Such research activities would result in students presenting their findings at professional conferences and/or co-authoring articles in valued journals. In addition, they will have the opportunity to participate in the activities of different university societies, attend departmental seminars, and contribute to the departmental governance.";
// echo "<img src='".$image."'>"."<br>";
// echo $title."<br>";
// echo $roadmap[1]."<br>";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$Main_Query="SELECT * FROM uni_details_table
				 WHERE province_name='Punjab' AND city_name='Lahore' AND field='BS(Chemistry)'
				 AND uni_name='UMT' ";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE uni_details_table SET uni_logo='".$image."',
			   field_description='".$description."',
			   field_roadmap='".$roadmap[1]."'
			   WHERE province_name='Punjab' AND city_name='Lahore' AND field='BS(Chemistry)'AND uni_name='UMT' ";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated UMT University BS(Chemistry) Field Data Scraped From It's Website And Stored In Database";
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
					   VALUES('Punjab','Lahore','".$image."','UMT','BS(Chemistry)',
					   '".$title."','".$description."','".$roadmap[1]."')";
		
		if (mysqli_query($conn,$insert_query)) {
			echo "UMT University Data BS(Chemistry) Field Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Inseration Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>

