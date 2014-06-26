var app = angular.module('app', []); //creates module


//$scope allows you to communicate with control
app.controller('ToDoCtrl', ['$scope', function($scope){
    $scope.addingtask = false; //default no task
    
    $scope.addTask = function() {
        $scope.addingtask = true;
    }
    
    $scope.home = function() {
        $scope.addingtask = false;
        $scope.newtasktext = '';
    }
    
    $scope.removeItem = function(i) {
        $scope.tasks.splice(i, 1);
    }
    
    $scope.newtasktext = '';
    $scope.addNewTask = function(description) {
        var task = {
            text: description,
            done: false,
    };
    
    $scope.tasks.push(task);
    $scope.home();
    }
    
    $scope.tasks = [];
    

}]);