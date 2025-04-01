<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>OOP Punkt Übung</title>
</head>

  <?php 
  include_once "u_oop_punkt.inc.php"; 

  $punkt1 = new Punkt();                
  echo "$punkt1<br>";

  $punkt2 = new Punkt(3.5, 2.5);         
  echo "$punkt2<br>";

  $punkt3 = new Punkt(4);                
  echo "$punkt3<br>";

  $punkt4 = new Punkt(y: 1.5);           
  echo "$punkt4<br>";

  $punkt4->verschieben(4.5, 2);         
  echo "$punkt4";
  ?>
</body>
</html>



</body>
</html>


