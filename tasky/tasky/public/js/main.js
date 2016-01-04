'use strict';

$(function(){
  $('#cargar').click(function(){
    $.ajax({
      url:'/api',
      dataType: 'json',
      success: function(datos){
        $("#resultado").html("");
        for(var i in datos){
            $('#resultado').append(datos[i].id + '.-');
            $('#resultado').append(datos[i].tarea + ' - ');
            $('#resultado').append(datos[i].estado + '<br>');
        }
      }
    });
  });
});
