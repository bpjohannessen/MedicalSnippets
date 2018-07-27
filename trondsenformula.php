<!DOCTYPE html>
<html>
<head>
<title>Trondsen Formula | Fettenajs.com</title>
</head>
<body>
  
<form autocomplete="off">

<table>
<tr><td>Age</td><td><input method="text" name="age" id="alder" onblur="calculate()"></td></tr>
<tr><td>Bilirubin</td><td><input method="text" name="bilirubin" id="bilirubin" onblur="calculate()"></td></tr>
<tr><td>ALAT</td><td><input method="text" name="alat" id="alat" onblur="calculate()"></td></tr>
<tr><td>GTT</td><td><input method="text" name="gtt" id="gtt" onblur="calculate()"></td></tr>
<tr><td><p id="result_text"></p></td><td><p id="result"></p></td></tr>
</table>

</form>

<script>

calculate = function()
{	
    var a = -7.58525;
    var b = 0.06617;
    var c = 0.0260967;
    var d = 0.00832;
    var e = 0.0088144;

    var age = document.getElementById('alder').value;
    var bilirubin = document.getElementById('bilirubin').value;
    var alat = document.getElementById('alat').value;
    var gtt = document.getElementById('gtt').value;
    calc = a + b * parseInt(age) + c * parseInt(bilirubin) + d * parseInt(alat) + e * parseInt(gtt);


	document.getElementById('result').value = a + b * parseInt(age) + c * parseInt(bilirubin) + d * parseInt(alat) + e * parseInt(gtt);
    
    if(isNaN(calc)) {
        document.getElementById('result_text').innerHTML = "";
        document.getElementById("result").innerHTML = "";
    } else {
        document.getElementById('result_text').innerHTML = "Result:";
        document.getElementById("result").innerHTML = calc;
    }

}

</script>
</body>
</html>
