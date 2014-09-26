var app = angular.module('app', []);

app.controller('ClockCtrl', [
'$scope', '$timeout', function ($scope, $timeout) {

    $scope.time = null; //Prints empty string
    
    var now = new Date(); //Gets the current date/time
    $scope.time = now; //turns time to a string so it's visible.
    
    $scope.showTime = function() {
        $timeout(function() {
            $scope.time = new Date();
            $scope.showTime();
        }, 1000);    
    }
    
    $scope.showTime();
}]);