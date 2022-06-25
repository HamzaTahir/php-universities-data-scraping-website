<?php
require 'simple_html_dom.php';

$html = file_get_html('https://bahria.edu.pk/academics/graduate-programs/ms-computer-science/');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$image = $html->find('img.img-responsive',0);
$title = $html->find('div.heading', 0);
$content = $html->find('div.description',0);
$description1 = $content->find('p',0);
$description2 = $content->find('ol',0);
$description = $description1.$description2;
$roadmap = $content->find('table.table',0);

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$Main_Query="SELECT * FROM uni_details_table
				 WHERE province_name='Punjab' 
				 AND city_name='Lahore' 
				 AND field='MS(CS)'
				 AND uni_name='Bahria University' ";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE uni_details_table SET uni_logo='".$image->src."',
			   field_description='".$description."',
			   field_roadmap='".$roadmap."'
			   WHERE province_name='Punjab' AND city_name='Lahore' AND field='MS(CS)'
			   AND uni_name='Bahria University' ";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated Bahria University MS(CS) Field Data Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Error in Updation Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
	}
	else{
		$insert_query="INSERT INTO uni_details_table(province_name,city_name,uni_logo,
			uni_name,field,field_title,field_description,field_roadmap) 
			VALUES('Punjab','Lahore','".$image->src."','Bahria University',
			'MS(CS)','".$title."','".$description."','".$roadmap."')";
		if (mysqli_query($conn,$insert_query)) {
			echo "Bahria University MS(CS) Field Data Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Error in Inserting Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
	}

}
?>

