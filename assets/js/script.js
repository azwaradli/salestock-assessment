var app = angular.module('myApp', ['ngRoute']);
app.config(function($routeProvider){
	$routeProvider
		.when('/',{
			templateUrl: 'index.html',
			controller: 'myCtrl'
		});
});
app.controller('myCtrl', function($scope){
	$scope.message = "Hello world";
});