<!DOCTYPE html>
<html ng-app>
<head>
	<title>Angular testing</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
	Your Password:
<input type="password" ng-model="m">
<br/>
Displaying your password:
<span ng-bind="m"></span>
</body>
</html>