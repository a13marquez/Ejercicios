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
});
