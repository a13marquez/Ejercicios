'use strict';
function cargarTabla(){
  $.ajax({
    url: 'generar-tabla.php',
    dataType:'html',
    success: function (respuesta){
      $('#resultado').html(respuesta);
    }
  });
}
$(function(){
  $('#cargar').click(function(){
    cargarTabla();
  });

  $('#guardar').click(function() {
    var n = $('#nombre').val();
    var m = $('#marca').val();
    var p = $('#precio').val();
    var s = $('#stock').val();
    var i = $("#id").val();
    $.ajax({
      url: 'guardar-producto.php',
      type: 'post',
      data: {nombre: n, marca : m, precio: p, stock: s, id:i},
      success: function(){
        alert('Producto guardado correctamente');
        $("#id").val("");
        $('#nombre').val("");
        $('#marca').val("");
        $('#precio').val("");
        $('#stock').val("");
        cargarTabla();
      }

  })


  });
  $(document).on('click', '.borrar', function(){
    var id = $(this).data("id");
    $.ajax({
      url: "borrar-producto.php",
      type: "post",
      data:{id:id},
      success: function(){
        cargarTabla();
      }
    });
  });
  $(document).on('click', '.editar', function(){
    var id = $(this).data("id");
    console.log(id);
    $.ajax({
      url: 'leer-producto.php',
      dataType: 'json',
      type:'post',
      data:{id: id},
      success: function(datos){
        console.log(datos);
        $("#id").val(datos.id);
        $("#nombre").val(datos.nombre);
        $("#marca").val(datos.marca);
        $("#precio").val(datos.precio);
        $("#stock").val(datos.stock);

      }
    });
  });
});
