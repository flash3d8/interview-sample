<!DOCTYPE html>
<html lang="en" ng-app="JPTest">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JPTest</title>

	<link href="/css/app.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script src="/js/app.js"></script>
</head>
<body ng-controller="MainController">
	<div class="container-fluid">
		<h1>User List <small>with photo gallery / emails</small></h1>
		<div class="row" ng-class="minimize">
			<h3 ng-hide="users">Loading...</h3>
			<div ng-show="users" class="col-md-2" ng-repeat="user in users">
				<div>
					<img src="/user_images/{{user.id}}.jpg" class="img-thumbnail" width="100" height="100" />
					<p>{{user.name}}<br />{{user.email}}</p>
					<input type="button" class="btn btn-info" value="Load Messages" ng-click="getEmails(user.id)" />
				</div>
			</div>
		</div>
		<table class="table table-hover" ng-show="minimize">
			<tr>
				<th>Date</th>
				<th>Message</th>
			</tr>
			<tr ng-hide="emails">
				<td colspan="2">Loading...</td>
			</tr>
			<tr ng-show="emails" ng-repeat="email in emails">
				<td>{{email.created_at}}</td>
				<td>{{email.message}}</td>
			</tr>
		</table>
	</div>
</body>
</html>
