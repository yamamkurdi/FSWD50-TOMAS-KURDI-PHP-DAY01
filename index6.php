<!DOCTYPE html>
<html>
<head>
	<title>First PHP</title>
	<link rel="stylesheet" href="style4.css">
</head>
<body>

<div id="center">
	
<?php

$cartoon = array(
"Mickey Mouse" => 2000,
"Super Mario" => 1000,
"Goku" => 500,
"Dexter" => 2000,
"Popeye" => 1000,
"Bugs Bunny" => 500
);

echo $cartoon["Mickey Mouse"],"<br>";
echo $cartoon["Super Mario"],"<br>";
echo $cartoon["Goku"],"<br>";
echo $cartoon["Dexter"],"<br>";
echo $cartoon["Popeye"],"<br>";
echo $cartoon["Bugs Bunny"];


$multicartoon = array(
"Super Mario" => array
(
"strenght" => "musroom",
"weakness" => "hit from the side",
"weapon" => "jump on the top"
),
"Dexter" => array
(
"strenght" => "his brain",
"weakness" => "his sister Dedee",
"weapon" => "his robots"
),
"Popeye" => array
(
"strenght" => "spinach",
"weakness" => "no spinach",
"weapon" => "his muscles"
)
);

echo "<br>";

echo "<div id='block'> Super Mario's strenght: ". $multicartoon['Dexter']['strenght']."</div>";
echo "<div id='block'> Dexter's strenght: ". $multicartoon['Dexter']['strenght']."</div>";

?>

</div>
</body>
</html>