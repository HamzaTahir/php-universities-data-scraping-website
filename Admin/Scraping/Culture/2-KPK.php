<?php
require 'simple_html_dom.php';

$html = file_get_html('https://historypak.com/pashtun-culture/');

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
$map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6774910.001021817!2d67.60601637420751!3d33.990953440564454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38deaec937ee679b%3A0x9611f44ebf7aa771!2sKhyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1588862451887!5m2!1sen!2s";
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
	$Main_Query="SELECT * FROM culture WHERE province_name='KPK'";
	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)!=0){
		$update_query="UPDATE culture SET image='".$image."',map='".$map."',
			   title='".$title."',content='".$content."'
			   WHERE province_name='KPK'";
		if (mysqli_query($conn,$update_query)) {
			echo "Updated KPK Culture Data Scraped From HistoryPak.com And Stored In Database";
		}
		else{
			echo "Error in Updation Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
	}
	else{
		$insert_query="INSERT INTO culture(province_name,image,title,content,map) 
					   VALUES('KPK','".$image."','".$title."','".$content."','".$map."')";
		
		if (mysqli_query($conn,$insert_query)) {
			echo "KPK Culture Data Scraped From HistoryPak.com And Stored In Database";
		}
		else{
			echo "Inseration Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>

