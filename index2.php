<!DOCTYPE html>
<html>
<head>
	<title>First PHP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="center">
	
<?php
$d=date("D");
if ($d=="Mon")
echo "Happy Monday!";
else
echo "Have a nice day!";
?>

</div>
</body>
</html>