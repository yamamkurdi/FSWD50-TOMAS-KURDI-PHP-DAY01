<!DOCTYPE html>
<html>
<head>
	<title>First PHP</title>
	<link rel="stylesheet" href="style3.css">
</head>
<body>

<div id="center">
	
<?php

$array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach( $array as $value )
{
 echo "Value is $value <br/>";
}

?>

</div>
</body>
</html>