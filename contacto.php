<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estiloC.css">
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilogeneral.css">
  <title>trabajo Final trimestre</title>
  <?php include 'head.php';?>
</head>

<body>
  <header>
    <img id="lis" src="media/logolis.png">
    <h1>Trabajo Final</h1>

  </header>

  <?php include 'header.php';?>

  <form action="/my-handling-form-page" method="post">
    <ul>
      <li>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="user_name">
      </li>
      <li>
        <label for="mail">Correo electrónico:</label>
        <input type="email" id="mail" name="user_mail">
      </li>
      <li>
        <label for="msg">Mensaje:</label>
        <textarea id="msg" name="user_message"></textarea>
      </li>
      <li class="button">
        <button type="submit">Envíe su mensaje</button>
      </li>
    </ul>

  </form>
  <div id="mapa">
    <h1>Para contarcar conmigo vaya a esta dirección</h1>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8415.666798169525!2d-4.3612348135151!3d36.71859574558715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xec0ecedd8dc61902!2sCesur%20M%C3%A1laga%20Este%20%F0%9F%A5%87%20Formaci%C3%B3n%20Profesional!5e0!3m2!1ses!2ses!4v1606416344507!5m2!1ses!2ses"
      width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
      tabindex="0"></iframe>>

  </div>

</body>
<?php include 'footer.php';?>

</html>