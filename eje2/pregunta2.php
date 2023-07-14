<!DOCTYPE html>
<html>
<head>
  <title>Respuesta</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Bienvenido</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $direccion = $_POST["direccion"];
      $email = $_POST["email"];
      $edad = $_POST["edad"];

      if (!empty($nombre) && !empty($apellido) && !empty($direccion) && !empty($email) && !empty($edad)) {
        if (is_numeric($edad)) {
          if ($edad > 18) {
            echo "<div class='response-message'>Hola <span>$nombre $apellido</span>, tu dirección es <span>$direccion</span>, tienes <span>$edad</span> años y tu correo es <span>$email</span>.</div>";
          } else {
            echo "<div class='response-message error-message'>Solo se admiten usuarios mayores de edad</div>";
          }
        } else {
          echo "<div class='response-message error-message'>La edad debe ser un valor numérico</div>";
        }
      } else {
        echo "<div class='response-message error-message'>Todos los campos son obligatorios</div>";
      }
    }
    ?>
  </div>
</body>
</html>
