
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
	
	foreach($html->find('ul') as $ul) 
{
       foreach($ul->find('li') as $li) 
       {
             // do something...
       }
}

// Find first <li> in first <ul> 
$e = $html->find('ul', 0)->find('li', 0);
	echo $e;
	
	foreach($html->find('a') as $element) 
   echo $element. '<br>';
	
	?>
	</body>
	</html>
	