<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
  
<?php

$a = -7.58525;
$b = 0.06617;
$c = 0.0260967;
$d = 0.00832;
$e = 0.0088144;

$age = @$_POST["age"];
$bilirubin = @$_POST["bilirubin"];
$alat = @$_POST["alat"];
$gtt = @$_POST["gtt"];

$calc = $a + $b*$age + $c*$bilirubin + $d*$alat + $e*$gtt;

if($_SERVER["REQUEST_METHOD"] == "POST") {
  echo $calc;
} else {
  echo "not submitted";
}

?>

<form action="trondsenformula.php" method="POST">

<table>
<tr><td>Age</td><td><input method="text" name="age"></td></tr>
<tr><td>Bilirubin</td><td><input method="text" name="bilirubin"></td></tr>
<tr><td>ALAT</td><td><input method="text" name="alat"></td></tr>
<tr><td>GTT</td><td><input method="text" name="gtt"></td></tr>
<tr><td rowspan="2"><input type="submit"></td></tr>
</table>

</form>
