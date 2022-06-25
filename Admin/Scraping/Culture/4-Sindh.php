<?php
require 'simple_html_dom.php';

$html = file_get_html('https://historypak.com/sindhi-culture-2/');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

$image = $html->find('img.attachment-us_100_100_crop',0);
$image = $image->src;
$title = $html->find('h5.w-page-title',0);
$title = $title->plaintext;

// $desc = $html->find('div.l-section-h',1);
$content = $html->find('div.l-section-h',1);
$map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667525.5068191183!2d66.64468088114613!3d26.145628963826226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394cc06b6bc1942b%3A0x2e2056a9c78be82d!2sSindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1588863617338!5m2!1sen!2s";
// $description1 = $description->find('p',0);
// $description2 = $description->find('p',1);
// $content = $description1 . $description2;
// $content2 = $description->find('p');

// echo $content2[3];
// echo $description;

$content = str_replace("code-block code-block-1"," ",$content);
$content = str_replace("margin: 8px 0; clear: both;"," ",$content);


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$Main_Query="SELECT * FROM culture WHERE province_name='Sindh'";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE culture SET image='".$image."',map='".$map."',
			   title='".$title."',content='".$content."'
			   WHERE province_name='Sindh'";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated Sindh Culture Data Scraped From HistoryPak.com And Stored In Database";
		}
		else{
			echo "Error in Updation Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
	}
	else{
		$insert_query="INSERT INTO culture(province_name,image,title,content,map) 
					   VALUES('Sindh','".$image."','".$title."','".$content."','".$map."')";
		
		if (mysqli_query($conn,$insert_query)) {
			echo "Sindh Culture Data Scraped From HistoryPak.com And Stored In Database";
		}
		else{
			echo "Inseration Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>

