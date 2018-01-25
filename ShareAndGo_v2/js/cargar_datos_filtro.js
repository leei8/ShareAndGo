var mi_buscador = angular.module('mi_buscador', []);

mi_buscador.controller('mainController', ["$scope", "$http", function ($scope, $http) {
        $scope.listaTrayectos = [];

        $http.get("../../controlador/controlador_trayectos_municipios.php")
                .then(function (response) {


                    $scope.listaTrayectos = response.data;

                });
              

    }]);