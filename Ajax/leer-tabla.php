<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cargar tabla AJAX</title>
  </head>
  <body>
    <div id="formulario" class="">
      <input type="text" id="nombre" placeholder="Nombre del producto">
      <input type="text" id="marca" placeholder="Marca del producto">
      <input type="text" id="precio" placeholder="Precio del producto">
      <input type="text" id="stock" placeholder="Stock del producto">
      <button id="guardar">Guardar</button>
    </div>
    <button type="button" name="cargar">Cargar tabla</button>
    <div class="resultado"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/leer-tabla.js"></script>
  </body>
</html>
