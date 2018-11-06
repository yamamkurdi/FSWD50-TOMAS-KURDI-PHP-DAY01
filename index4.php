<!DOCTYPE html>
<html>
<head>
	<title>First PHP</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>

<div id="center">
	
<?php
$a = "Tamas Olaszki \n";

for( $i=0; $i<49; $i++ )
{
echo $a;
}

echo "while \n";

$i = 0;

while( $i < 49)
{
echo $a;
$i++;
}

echo "do while \n";

$i = 0;

do
{
$i++;
echo $a;
} while( $i < 49 );

?>

</div>
</body>
</html>