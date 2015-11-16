'use strict';

$(function(){
  $("#cargar").click(function() {
    var ciudad =$('#ciudad').val();
    $.ajax({
      url: 'http://api.openweathermap.org/data/2.5/weather?=appid=fda8e944f344f2d8bd9348f208f69e77&q=' + ciudad,
      dataType: 'json',
      success: function(datos){
            var temp = parseInt(datos.main.temp - 273);
            var hum = datos.main.humidity;
            var vel = datos.wind.speed;
            var nom = datos.name;
            var desc = datos.weather[0].main;

            $("#resultado").html(
              "Ciudad: " + nom + '<br>' +
              "Estado: "  + desc + '<br>' +
              "Temperatura: " + temp + '<br>' +
              "Humedad: " + hum + '<br>' +
              "Vel. viento: " + vel
            );
        }
    });
  });
});
