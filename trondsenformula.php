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
/*
$age = 48;
$bili = 64;
$alat = 964;
$gtt = 940;
*/
$calc = $a + $b*@$age + $c*@$bilirubin + $d*@$alat + $e*@$gtt;

if(@$_POST["submit"]==1) {
echo $calc;
} else {
  echo "not submitted";
}

?>

<form action="?" method="POST">
<input type="hidden" name="submit" value="1">
<table>
<tr><td>Age</td><td><input method="text" name="age"></td></tr>
<tr><td>Bilirubin</td><td><input method="text" name="bilirubin"></td></tr>
<tr><td>ALAT</td><td><input method="text" name="alat"></td></tr>
<tr><td>GTT</td><td><input method="text" name="gtt"></td></tr>
<tr><td rowspan="2"><input type="submit"></td></tr>
</table>

</form>
