<?php
require 'simple_html_dom.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";
$a = array();
$word = 'https://blogs.tribune.com.pk/story/';
$html = file_get_html('https://blogs.tribune.com.pk/');
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

else{

   for ($i=0; $i < 15 ; $i++) { 
   	$temp= $html->find('div.page-content', 0);
   	$temp = $temp->find('a', $i);
   	if (in_array($temp->href, $a)) {
   		$i++;
	   	$temp = $html->find('a', $i);
   		$i--;
   		$a[$i] = $temp->href;
   	}
   	else{
	   	$a[$i] = $temp->href;
   	}
   }




   for ($i=0; $i < count($a); $i++) { 
   	if(strpos($a[$i], $word) !== false){
   		// echo $a[$i]."<br>";
		$html1 = file_get_html($a[$i]);
		$story_title = $html1->find('div.story-title', 0);
		$story_title = $story_title->find('h1', 0);
		$story_title = $story_title->plaintext;
		// echo $story_title."<br>";
		$story_image = $html1->find('div#story-image', 0);
		if (!empty($story_image)) {
			$story_image = $story_image->find('div.story-image-container', 0);
			$story_image = $story_image->find('img', 0);
			$story_image = str_replace("data-cfsrc","src",$story_image);
			$story_image = str_replace("display:none;visibility:hidden;","",$story_image);
		// echo($story_image);
		}
		$main_story_content = $html1->find('div.story-content', 0);
		$story_content = "";
		foreach($main_story_content->find('p') as $p) {
	       $story_content = $story_content . $p;
	       $check = $p->find('img');
	       if (!empty($check)) {
	       	    foreach($p->find('img') as $img) {
	       			$story_content = $story_content . $img;
				}
	        }
	    $story_content = preg_replace('#<p class="excerpt">(.*?)</p>#', '', $story_content);
	    $story_content = preg_replace('#<p class="disclaimer">(.*?)</p>#', '', $story_content);
	    $story_content = preg_replace('#<p class="caption">(.*?)</p>#', '', $story_content);
	    $story_content = preg_replace('#<a.*?>(.*?)</a>#i', '\1', $story_content);
	    $story_content = preg_replace('#<a.*?>(.*?)</a>#i', '\1', $story_content);
	    $story_content = preg_replace('#<no>(.*?)</no>#', '', $story_content);
	    $story_content = preg_replace('#<em>(.*?)</em>#', '', $story_content);
	    $story_content = preg_replace('#<div class="fb-post fb_iframe_widget">(.*?)</div>#', '', $story_content);

	    $story_content = preg_replace('!<img.*?src="https://blogs.tribune.com.pk/wp-content/plugins/wp-polls/images/loading.gif".*?/>!i', '', $story_content);
		$story_content = str_replace("data-cfsrc","src",$story_content);
	    $story_content = str_replace('Georgia', '', $story_content);
	    $story_content = str_replace('serif', '', $story_content);
	    $story_content = str_replace('color: #333333;', '', $story_content);
	    $story_content = str_replace('script', '', $story_content);
	    $story_content = str_replace('facebook-jssdk', '', $story_content);
	    $story_content = str_replace("'s", '', $story_content);
	    // $story_content = str_replace("'", '', $story_content);
	    // $story_content = mysql_real_escape_string($story_content);
	
	}
	 	// echo $a[$i]."<br>";
	    // echo $story_title."<br>";
	    // echo $story_image."<br>";
	    // echo $story_content."<br>";
	    $story_link = $a[$i]; 
	$Main_Query="SELECT story_link FROM newsletter_table 
				 WHERE story_link='".$story_link."' ";

	$Result=mysqli_query($conn,$Main_Query);

	if(mysqli_num_rows($Result)==0){
		$insert_query="INSERT INTO newsletter_table(	
					   story_link,story_title,story_image,story_content) 
					   VALUES('".$story_link."','".$story_title."','".$story_image."','".$story_content."')";
		
		if (mysqli_query($conn,$insert_query)) {
			echo "New Post Scraped From Blogs Tribune And Stored In Database.<br>";
		}
		else{
			echo "Error Please Try Again Later<br>";
			echo  "".mysqli_error($conn);
		}
	}
	else{
		echo "No New Post In Blogs Tribune.<br>";
	}
}
}
}
	mysqli_close($conn);
 
?>

