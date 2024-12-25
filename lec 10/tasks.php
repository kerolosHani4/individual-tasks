<!DOCTYPE html>
<html>
<body>
<?php
for ($x = 0; $x <= 100; $x+=10) {
echo "The number is: $x <br>";
}
?>
<br>
<?php
$i = 0;
do {
$i++;
if ($i == 3) continue;
echo $i;
} while ($i < 6);
?>
<br>

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>
<br>

<?php
$d = 4;
switch ($d) {
case 6:
echo "Today is Saturday";
break;
case 0:
echo "Today is Sunday";
break;
default:
echo "Looking forward to the Weekend";
}
?>

</body>
</html>