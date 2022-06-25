<?php
require 'simple_html_dom.php';

$html = file_get_html('http://lhr.nu.edu.pk/cs/programDetails/MS%20(Computer%20Science)');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$image = 'http://lhr.nu.edu.pk/static/campus/Images/logo.PNG';
$title = $html->find('title', 0);
$description = $html->find('ol',0);
$roadmap = $html->find('div.studyPlan', 0);
$roadmap = $roadmap->find('table.table-striped',0);
// $thead = $html->find('thead',1);
// $tr = $thead->find('tr',0);
// $th = $tr->find('th',0);

// $tbody = $html->find('tbody',0);

// echo strlen($roadmap);
// echo $roadmap;
$roadmap = str_replace("5"," ",$roadmap);

// echo "<br>";

// $roadmap="123";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$Main_Query="SELECT * FROM uni_details_table
				 WHERE province_name='Punjab' AND city_name='Lahore' AND field='MS(CS)'
				 AND uni_name='FAST' ";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE uni_details_table SET uni_logo='".$image."',
			   field_description='".$description."',
			   field_roadmap='".$roadmap."'
			   WHERE province_name='Punjab' AND city_name='Lahore' AND field='MS(CS)'AND uni_name='FAST' ";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated FAST University MS(CS) Field Data Scraped From It's Website And Stored In Database";
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
					   VALUES('Punjab','Lahore','".$image."','FAST','MS(CS)',
					   '".$title."','".$description."','".$roadmap."')";
		
		if (mysqli_query($conn,$insert_query)) {
			echo "FAST University Data MS(CS) Field Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>

