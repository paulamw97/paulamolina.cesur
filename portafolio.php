<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estiloP.css">
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estiloscalculadora.css">
  <script src="js/calculadora.js"></script>
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilogeneral.css">
  <title>Trabajo Final trimestre</title>
  <?php include 'head.php';?>
</head>

<body>
  <header>
    <img id="lis" src="media/logolis.png">
    <h1>Trabajo Final</h1>

  </header>

  <?php include 'header.php';?>
  <div id="vacio"></div>
  <form name="calculator" id="calcu">

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
  <div>
    <img id="borde" src="media/borde.jpg">
  </div>
  <div>
    <h1 id="pincha">Pincha aquí para ver el video </h1>
  </div>
  <div id="video1">
    <video width=320 height=240 controls poster="media/video1.jpg">
      <source src="media/parallax.webm" type="video/webm">
      <source src="media/parallax.ogg" type="video/ogg">
      <source src="media/parallax.mp4" type="video/mp4">
    </video>
  </div>
  <div>
    <h1 id="otros">pincha para ver otros trabajos</h1>
  </div>
  <div>
    <a title="folio" href="tarea-js-0-prompt-alert 1.html"><img id="folio" src="media/portapapeles.png" alt="folio" />
  </div>

</body>
<?php include 'footer.php';?>

</html>