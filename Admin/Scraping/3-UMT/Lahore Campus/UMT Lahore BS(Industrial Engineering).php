<?php
require 'simple_html_dom.php';

$html = file_get_html('https://sen.umt.edu.pk/Programs/Undergraduate-Programs/Bs-Industrial-Engineering/Curriculum-Industrial.aspx');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$image = "https://ssc.umt.edu.pk/style/images/ssc-logo.png";
$title = $html->find('div.col-lg-12',1);
$title = $title->find('h2',1);

$roadmap1 = $html->find('table');
$description = "The degree program has been designed as an all-encompassing scheme of studies that may satisfy the needs of different industrial sectors not only domestically but also internationally. The Department of Industrial and Mechanical Engineering takes pride in addressing these needs by involving the industry on one hand, and the students on the other.

Experienced academicians from the best universities in Pakistan, highly experienced professionals from industry alongside the university faculty partake in periodic revision of the curriculum as per the market needs.

Students are involved in active discussions, case studies and industrial visits. Special attention is given to ensure intellectual as well as practical grooming of our students. In short, the department does its best to create an environment conductive for learning, and to transfer our studies into competent engineers at entry level and then to assume leadership roles later in their professional lives.

The scheme of studies is constituted by an appropriate blend of courses from engineering, management and social sciences domains. These cover not only the breadth of Industrial Engineering and cross-disciplinary engineering fields, but also delve deeper into specific areas. Our faculty is also encouraged to engage themselves with the industry. This involvement allows our faculty members to keep abreast of at least developments and problems faced by the industry. The very knowledge is eventually imparted to students to prepare for their professional lives.";

// echo "<img src='".$image."'>"."<br>";
// echo $title."<br>";

$roadmap = "";
$roadmap = $roadmap . $roadmap1[1];
$roadmap = $roadmap . $roadmap1[2];
$roadmap = $roadmap . $roadmap1[3];
$roadmap = $roadmap . $roadmap1[4];

// echo $roadmap;


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$Main_Query="SELECT * FROM uni_details_table
				 WHERE province_name='Punjab' AND city_name='Lahore' AND field='BS(IE)'
				 AND uni_name='UMT' ";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE uni_details_table SET uni_logo='".$image."',
			   field_description='".$description."',
			   field_roadmap='".$roadmap."'
			   WHERE province_name='Punjab' AND city_name='Lahore' AND field='BS(IE)'AND uni_name='UMT' ";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated UMT University BS(IE) Field Data Scraped From It's Website And Stored In Database";
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
					   VALUES('Punjab','Lahore','".$image."','UMT','BS(IE)',
					   '".$title."','".$description."','".$roadmap."')";
		
		if (mysqli_query($conn,$insert_query)) {
			echo "UMT University Data BS(IE) Field Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Inseration Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>

