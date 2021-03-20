<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">

  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estiloscalculadora.css">
  <script src="js/calculadora.js"></script>
</head>
<body>

  <form name="calculator">
   
    <p>Haz algun calculo para ver el resultado.</p>
    <input type="textfield" name="ans" value="">
    <br>
    <input type="button" value="1" onClick="calculadora(1)">
    <input type="button" value="2" onClick="calculadora(2)">
    <input type="button" value="3" onClick="calculadora(3)">
    <input type="button" value="+" onClick="calculadora('+')">
    <br>
    <input type="button" value="4" onClick="calculadora(4)">
    <input type="button" value="5" onClick="calculadora(5)">
    <input type="button" value="6" onClick="calculadora(6)">
    <input type="button" value="-" onClick="calculadora('-')">
    <br>
    <input type="button" value="7" onClick="calculadora(7)">
    <input type="button" value="8" onClick="calculadora(8)">
    <input type="button" value="9" onClick="calculadora(9)">
    <input type="button" value="*" onClick="calculadora('*')">
    <br>
    <input type="button" value="0" onClick="calculadora(0)">
    <input type="reset" value="c">
    <input type="button" value="/" onClick="calculadora('/')">
    <input type="button" value="=" onClick="resultado()">
    </form>
</body>
</html>