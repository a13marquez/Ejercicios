<!DOCTYPE html>
<head>
  <title>Calculadora del área de un triángulo</title>
  <meta charset="utf-8">
</head>
<body>
  <?php
    if (isset($_GET['error'])){
      switch($_GET['error']){
        case 1:
          echo '<div>Hay que añadir la altura</div>';
          break;
        case 2:
          echo '<div>Hay que añadir la base</div>';
      };
    };
  ?>
  <form name="area-triangulo-form" action="EjercicioClase9_03_02_Procesamiento.php" method="post">
    <input type="number" name="altura" placeholder="Introduce la altura del triángulo"><br>
    <input type="number" name="base" placeholder="Introduce la base el triángulo"><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
