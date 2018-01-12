var mi_buscador = angular.module('mi_buscador', []);

//mi_buscador.controller('mainController'),["$scope","http",function($scope,$http){
//        $http.get("../controlador/controlador_combo_municipios.php").success(function(data){
//            
//            $scope.lista = data;
//            
//        });
//        
//        }];

mi_buscador.controller('mainController'), ["$scope", "http", function ($scope, $http) {
        $scope.listaTrayectos = [];

        $http.get("../../controlador/controlador_trayectos_municipios.php").success(function (data){


            $scope.listaTrayectos = data;

        });
}];
//mi_buscador.controller("mainController", function ($scope, $http) {
//
//    $scope.listaTrayectos = [];
//
//    $http.get("../controlador/controlador_trayectos_municipios.php").success(function (data) {
//        $scope.listaTrayectos = data;
//    });




