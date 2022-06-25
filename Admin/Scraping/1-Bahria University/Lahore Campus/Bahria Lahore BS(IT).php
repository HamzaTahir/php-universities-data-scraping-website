<?php
require 'simple_html_dom.php';

$html = file_get_html('https://bahria.edu.pk/academics/under-graduate-programs/bs-information-technology/');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$image = $html->find('img.img-responsive',0);
$title = $html->find('title', 0);
$content = $html->find('div.description',0);
$description = $content->find('p',0);


$roadmap = $content->find('table');
//$table = $content->find('table');	
// $roadmap_Array=array($roadmap[0],$roadmap[1],$roadmap[2],$roadmap[3],
			   // $roadmap[4],$roadmap[5],$roadmap[6],$roadmap[7]);
// for ($i=0; $i <7 ; $i++) { 
// 	array_push($roadmap_Array,$roadmap[$i]);
// }

// echo "<img src='".$image->src."'>";
// echo $title->plaintext."<br>\n";
// echo $roadmap."<br>\n";
// echo ($roadmap_Array);
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
// 'province_name', 'city_name', 'uni_name', 'field'
else{
	$Main_Query="SELECT * FROM uni_details_table
				 WHERE province_name='Punjab' AND city_name='Lahore' AND field='BS(IT)'
				 AND uni_name='Bahria University' ";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE uni_details_table SET uni_logo='".$image->src."',
			   field_description='".$description->plaintext."',
			   Semester_1='".$roadmap[0]."',Semester_2='".$roadmap[1]."',
			   Semester_3='".$roadmap[2]."',Semester_4='".$roadmap[3]."',
			   Semester_5='".$roadmap[4]."',Semester_6='".$roadmap[5]."',
			   Semester_7='".$roadmap[7]."',Semester_8='".$roadmap[8]."'
			    WHERE province_name='Punjab' AND city_name='Lahore' AND field='BS(IT)'AND uni_name='Bahria University' ";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated Bahria University BS(IT) Field Data Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Error in Updation Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
	}
	else{
		// $roadmap=serialize($roadmap);
		// echo $roadmap;
		$insert_query="INSERT INTO uni_details_table(province_name,city_name,uni_logo,uni_name,field,
   					   field_title,field_description,Semester_1,Semester_2,Semester_3,Semester_4,
   					   Semester_5,Semester_6,Semester_7,Semester_8) 
					   VALUES('Punjab','Lahore','".$image->src."','Bahria University','BS(IT)',
					   '".$title->plaintext."','".$description->plaintext."','".$roadmap[0]."'
					   ,'".$roadmap[1]."','".$roadmap[2]."','".$roadmap[3]."','".$roadmap[4]."'
					   ,'".$roadmap[5]."','".$roadmap[7]."','".$roadmap[8]."')";
		if (mysqli_query($conn,$insert_query)) {
			echo "Bahria University BS(IT) Field Data Scraped From It's Website And Stored In Database";
		}
		else{
			echo "Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
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

}
?>

