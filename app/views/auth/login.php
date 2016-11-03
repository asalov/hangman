	
	<div ng-controller="AuthController">
		<form name="loginForm" action="<?php echo PATH; ?>auth/loginUser" method="post" 
		autocomplete="off" novalidate ng-submit="loginUser($event, user)">
			<div class="form-group">
				<label for="email">Email: <span class="required">*</span></label>
				<input class="form-control" ng-model="user.email" type="email" id="email" name="email" 
				ng-change="hasErrors = false" autofocus required>
			</div>
			<div class="form-group">
				<label for="password">Password: <span class="required">*</span></label>
				<input class="form-control" ng-model="user.password" type="password" id="password" name="password" 
				ng-change="hasErrors = false" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" ng-disabled="loginForm.$invalid" value="Login">
			</div>
		</form>
		<a href="<?php echo PATH; ?>auth/register" class="register-link">Register</a>
		<div class="alert alert-danger ng-cloak" ng-show="loginForm.email.$dirty && loginForm.email.$invalid">
			Invalid email.
		</div>		
		<div ng-show="hasErrors === true" class="alert alert-danger ng-cloak">
			<p ng-repeat="error in errors">{{ error }}</p>
		</div>
	</div>