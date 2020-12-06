<!DOCTYPE html>
<html>
  <head>
    <title>test</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<link rel="stylesheet" type="text/css" href="" />
  </head>
  <body>
	<header ="colonne2">
		<h1>TEST</h1>
	</header>

<?php
	for ($i=0; $i<11; $i++){
		echo '<div>';
		echo $i;
		echo '</div>';
	}
	
	echo '<br>';
	echo '<br>';
	echo '<table>';
	for($j=0; $j<11; $j++){
		echo '<tr>';
		
		for($f=1; $f<11; $f++){
			echo '<td>';
			echo $f;
			echo '</td>';
		}
	}
	echo '</table>';
	
?>
</body>
</html>