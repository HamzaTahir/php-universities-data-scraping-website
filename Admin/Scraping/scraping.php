<?php
require 'simple_html_dom.php';

$html = file_get_html('https://bahria.edu.pk/academics/graduate-programs/ms-computer-science/');

$image = $html->find('img.img-responsive',0);
$title = $html->find('title', 0);
$description = $html->find('div.description',0);
$p = $description->find('p',0);


$table = $description->find('table');

echo "<img src='".$image->src."'>";
echo $title->plaintext."<br>\n";
echo $p->plaintext."<br>\n";

$a=1;
for ($i=0; $i <8 ; $i++) {
	echo "Semester ".$a;
	echo $table[$i]."<br>\n";
	$a++; 
}

?>