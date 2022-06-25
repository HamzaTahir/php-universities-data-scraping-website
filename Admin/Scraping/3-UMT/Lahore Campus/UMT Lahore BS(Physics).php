<?php
require 'simple_html_dom.php';

$html = file_get_html('https://ssc.umt.edu.pk/Programs/Undergraduate-Programs/BS-Physics-Curriculum.aspx');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$image = "https://ssc.umt.edu.pk/style/images/ssc-logo.png";
$title = $html->find('div.col-lg-12',1);
$title = $title->find('h2',0);

$roadmap1 = $html->find('table');
$description = "The BS program offered in Physics is designed according to the Scheme of studies approved by the Higher Education Commission (HEC) of Pakistan so as to meet the national and international standards. Courses offered at SST have the benefit of a flexible curricular program capable of preparing them for advance studies in Physics as well as careers in teaching and research institutes. The department encourages the students to participate in the research projects, and provide them with possible facilities and guidance. The opportunity to work closely with a faculty member and to get firsthand research experience is especially helpful in making post-graduate career decisions. Students will involve for full-time research both at UMT and other research institutes. Such research activities would result in students presenting their findings at professional conferences and/or co-authoring articles in valued journals. In addition, they will have the opportunity to participate in the activities of different university societies, attend departmental seminars, and contribute to the departmental governance.";

// echo "<img src='".$image."'>"."<br>";
// echo $title."<br>";

$roadmap = "";
$roadmap = $roadmap . $roadmap1[0];
$roadmap = $roadmap . $roadmap1[1];
$roadmap = $roadmap . $roadmap1[2];
$roadmap = $roadmap . $roadmap1[3];

// echo $roadmap;


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$Main_Query="SELECT * FROM uni_details_table
				 WHERE province_name='Punjab' AND city_name='Lahore' AND field='BS(Physics)'
				 AND uni_name='UMT' ";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE uni_details_table SET uni_logo='".$image."',
			   field_description='".$description."',
			   field_roadmap='".$roadmap."'
			   WHERE province_name='Punjab' AND city_name='Lahore' AND field='BS(Physics)'AND uni_name='UMT' ";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated UMT University BS(Physics) Field Data Scraped From It's Website And Stored In Database";
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
					   VALUES('Punjab','Lahore','".$image."','UMT','BS(Physics)',
					   '".$title."','".$description."','".$roadmap."')";
		
		if (mysqli_query($conn,$insert_query)) {
			echo "UMT University Data BS(Physics) Field Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Inseration Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>

