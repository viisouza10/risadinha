var app = angular.module('risadinha', ['ngSanitize']);

app.controller('listaPiadas', function($scope, $http) {
    $http.get('js/piadas.json').success(function(data) {
        $scope.piadas = data;
        console.log(data);
    });

    $scope.toggleContraste = function() {
        $("#toggleContraste").click(function() {
            console.log('msg');
            $("body").toggleClass('contraste');
        });
    }
});