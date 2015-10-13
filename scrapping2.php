<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Web scrapper</title>
	</head>
	<?php 
	require('Scrapperdom\simple_html_dom.php');
	$counter=1;
	$html = new simple_html_dom;
	
	$html->load_file('flipkart.htm');
	
	
	$titles=$html->find('p');
	
	foreach($titles as $title)
	{
		echo '<b>'. $title->outertext .'</b>';
		echo '<hr><br />';
	
	}
	
	
	?>
	</body>
	</html>