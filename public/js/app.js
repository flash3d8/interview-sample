angular.module('JPTest', []).controller('MainController', function($scope, $rootScope, $http) {
	$http.get('/json/users').success(function(data) {
		$scope.users = data;
	});
	$rootScope.getEmails = function (user_id) {
		$rootScope.minimize = 'minimize';
		$http.get('/json/emails/' + user_id).success(function (data) {
			$rootScope.emails = data;
		});
	};
	$rootScope.close = function () {
		$rootScope.minimize = false;
	};
});