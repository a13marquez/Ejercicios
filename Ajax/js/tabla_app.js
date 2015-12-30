'use strict'

var app = angular.module('tabla', ['ngResource']);


app.service('datosTabla',['$http', '$resource',function($http, $resource){
    /*return $http({
      method:'GET',
      url: 'generar-tabla-angular.php'
    })*/
    function getDatos(){
      return $resource('generar-tabla-angular.php');
    }
    function guardarProducto(nombre, marca, precio, stock){
      $http.post('guardar-producto.php',
      {
          nombre: nombre,
          marca:marca,
          precio:precio,
          stock:stock
      })
      ;
    }
    return{
      getDatos: getDatos,
      guardarProducto: guardarProducto
    }
}]);

app.controller('TablaCtrl', ['datosTabla', '$scope',function(datosTabla, $scope){
  console.log(datosTabla.getDatos().query().$promise.then());
  $scope.datos = [];
  datosTabla.getDatos().query().$promise.then(function(data){
    $scope.datos = data;
    $scope.display_datos = [].concat($scope.datos);
    console.log($scope.datos);
  });
  $scope.guardarProducto = function(){
    $scope.producto = {
      nombre: $scope.producto.nombre,
      marca: $scope.producto.marca,
      precio: $scope.producto.precio,
      stock: $scope.producto.stock
    }
    $scope.display_datos.push($scope.producto);
    console.log($scope.display_datos);
    datosTabla.guardarProducto($scope.producto.nombre, $scope.producto.marca, $scope.producto.precio, $scope.producto.stock);


  }
}]);
