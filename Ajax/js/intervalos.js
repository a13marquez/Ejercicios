'use strict';
function recogerDatos(){
  $.ajax({
    url: 'generar-tabla-json.php',
    dataType: 'json',
    success: function(productos){
      $("#resultado").html('')
      for (var i in productos) {
        $('#resultado').append(
            productos[i].id + " - " +
            productos[i].nombre + " - " +
            productos[i].marca + " - " +
            productos[i].precio + " - "+
            productos[i].stock + "<br>"
        );
      }
    }
  });
};

$(function(){
  recogerDatos();
  var miIntervalo = setInterval(recogerDatos, 60000);

  $('#detener').click(function() {
    clearInterval(miIntervalo);
  });
});
