<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linie</title>
</head>
<body>
    
<?php
include_once "u_oop_linie.inc.php";

$linie1 = new Linie();
echo "$linie1<br>";

$punkt1 = new Punkt(3.5, 2.5);
$linie2 = new Linie(new Punkt(1.5, 4), $punkt1);

echo "$linie2<br>";

$linie3 = new Linie(new Punkt(-2, 5.5));
echo "$linie3<br>";

$linie4 = new Linie (ende: new Punkt(2.5, 1));
echo "$linie4<br>";

$linie4->verschieben(-2, 1.5);
echo "$linie4";

?>
</body>
</html>