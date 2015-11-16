'use strict';

$(function(){
  $('#cargar').click(function(){
    $.ajax({
      url: 'generar-tabla.php',
      dataType:'html',
      success: function (respuesta){
        $('#resultado').html(respuesta);
      }
    });
  });

  $('#guardar').click(function() {
    var nombre = $('#nombre').val();
    var marca = $('#marca').val();
    var precio = $('#precio').val();
    var stock = $('#stock').val();

    $.ajax({
      url: 'guardar-producto.php',
      type: 'POST',
      data: {nombre: nombre, marca : marca, precio: precio, stock: stock},
      success: function(){
        alert('Producto guardado correctamente');
        $.ajax({
          url: 'generar-tabla.php',
          dataType:'html',
          success: function (respuesta){
            $('#resultado').html(respuesta);
          }
        });
        $('#nombre').val("");
        $('#marca').val("");
        $('#precio').val("");
        $('#stock').val("");
        console.log("success");
      }

    })


  });
});
