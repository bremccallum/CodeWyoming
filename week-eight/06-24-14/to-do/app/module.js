var app = angular.module('app', []);

app.controller('ToDoCtrl', [
'$scope', '$http',
function ($scope, $http) {
    
    $scope.token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InBlcHBlcmxrQGdtYWlsLmNvbSIsImZhbWlseV9uYW1lIjoiUGVwcGVyIiwiZ2l2ZW5fbmFtZSI6IkxlZSIsIm5hbWUiOiJwZXBwZXJsa0BnbWFpbC5jb20iLCJuaWNrbmFtZSI6IkxlZSBQZXBwZXIiLCJwZV9pZCI6Ijc3ZTcwNTUyLWI1NjEtNDlkMC1hZGY1LTM4ZThiNDZiZWE1MSIsInBpY3R1cmUiOiJodHRwOi8vcGl0Y2hlbmdpbmVsaXZlLmJsb2IuY29yZS53aW5kb3dzLm5ldC9yZWZpbmVyeS83N2U3MDU1Mi1iNTYxLTQ5ZDAtYWRmNS0zOGU4YjQ2YmVhNTEvR2FsbGVyeS9mM2MwMDlkZS00NzczLTRlNzYtYWYzNS04N2UwMzYwNWM5MmUuanBnIiwiZGVzY3JpcHRpb24iOiJMb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0dXIgYWRpcGlzY2luZyBlbGl0IGZ1c2NlIHZlbCBzYXBpZW4gZWxpdCBpbiBtYWxlc3VhZGEgc2VtcGVyIG1pLCBpZCBzb2xsaWNpdHVkaW4gdXJuYSBmZXJtZW50dW0gdXQgZnVzY2UgdmFyaXVzIG5pc2wgYWMgaXBzdW0gZ3JhdmlkYSB2ZWwgcHJldGl1bSB0ZWxsdXMgdGluY2lkdW50IGludGVnZXIgZXUgYXVndWUgYXVndWUgbnVuYyBlbGl0IGRvbG9yLCBsdWN0dXMgcGxhY2VyYXQuIiwiX2lkIjoiM2UwZWE0NmFmZDg0OWUzZDI3MGZkZTFjNGQ5NWNhZTIiLCJjbGllbnRJRCI6Ink3QVNvUkFvUlBTTmNzZmVwSUVGaXAzR0dpVWNQdGpJIiwiY3JlYXRlZF9hdCI6IjIwMTQtMDUtMjBUMTY6NTY6MDEuMzQ4WiIsImlkZW50aXRpZXMiOlt7InVzZXJfaWQiOiI3N2U3MDU1Mi1iNTYxLTQ5ZDAtYWRmNS0zOGU4YjQ2YmVhNTEiLCJwcm92aWRlciI6ImF1dGgwIiwiY29ubmVjdGlvbiI6IlVzZXJuYW1lLVBhc3N3b3JkLUF1dGhlbnRpY2F0aW9uIiwiaXNTb2NpYWwiOmZhbHNlfV0sInVzZXJfaWQiOiJhdXRoMHw3N2U3MDU1Mi1iNTYxLTQ5ZDAtYWRmNS0zOGU4YjQ2YmVhNTEiLCJnbG9iYWxfY2xpZW50X2lkIjoiM0dPa04wZ2lLbFpIUkd2Z3JFQ09Jemx6Q09PblluSXYiLCJpc3MiOiJodHRwczovL2F1dGgwMzcyLmF1dGgwLmNvbS8iLCJzdWIiOiJhdXRoMHw3N2U3MDU1Mi1iNTYxLTQ5ZDAtYWRmNS0zOGU4YjQ2YmVhNTEiLCJhdWQiOiJ5N0FTb1JBb1JQU05jc2ZlcElFRmlwM0dHaVVjUHRqSSIsImV4cCI6MTQwNjIxMjIzMiwiaWF0IjoxNDAzNjIwMjMyfQ.E6Jdy6bTriuH6-XuX1V4bpNjNpDgJP_upzrgwe9kDzg";
    $http.defaults.headers.common['Authorization'] = 'Bearer ' + $scope.token;
    
    $scope.api = 'http://engine.pitchengine.com';
    
    $http.get($scope.api + '/v2/me/brands/a9c2b52b-9cff-4ce1-be0e-8c33ec8385c6/pitches?part=snip&drafts=true').success(function (data) {
        
        console.log(data);
        $scope.pitches = data.Data;
        
    });

    $scope.items = [];
    
    
    $scope.remove = function(i) {
        var pitch = $scope.pitches[i];
        $http.delete($scope.api + '/v2/me/brands/a9c2b52b-9cff-4ce1-be0e-8c33ec8385c6/pitches/' + pitch.ID).success(function (data){
        window.location.reload(); //reloads after delete
        });
    }
    
    $scope.newtask = '';
    
    $scope.add = function() {
        var pitch = {
            Headline: "Test Bre Skaggs",
            Text: "This is my text",
        }
        $http.post($scope.api + '/v2/me/brands/a9c2b52b-9cff-4ce1-be0e-8c33ec8385c6/pitches/', pitch).success(function (data){
        window.location.reload();//'puts' object
    });
    }
    

    }]);