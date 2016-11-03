	
	<div ng-controller="AuthController">
		<form name="registerForm" action="<?php echo PATH; ?>auth/registerUser" method="post" 
		autocomplete="off" novalidate ng-submit="registerUser($event, user)">
			<div class="form-group">
				<label for="email">Email: <span class="required">*</span></label>
				<input class="form-control" ng-model="user.email" type="email" id="email" name="email" 
				autofocus required ng-change="hasErrors = false">
			</div>
			<div class="form-group">
				<label for="password">Password: <span class="required">*</span></label>
				<input class="form-control" ng-model="user.password" ng-minlength="6" type="password" id="password" 
				name="password" required ng-change="hasErrors = false">
			</div>
			<div class="form-group">
				<label for="confirm_password">Confirm password: <span class="required">*</span></label>
				<input class="form-control" ng-model="user.confirm_password" type="password" id="confirm_password" 
				name="confirm_password" required ng-change="hasErrors = false">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" ng-disabled="registerForm.$invalid" value="Register">
			</div>
		</form>
		<div class="alert alert-danger ng-cloak" ng-show="!registrationSuccess && 
		(registerForm.email.$dirty && registerForm.email.$invalid)">
			Invalid email.
		</div>
		<div class="alert alert-danger ng-cloak" ng-show="!registrationSuccess && 
		(registerForm.password.$dirty && registerForm.password.$error.minlength)">
			Password must be longer than 6 characters.
		</div>
		<div ng-show="hasErrors === true" class="alert alert-danger ng-cloak">
			<p ng-repeat="error in errors">{{ error }}</p>
		</div>
		<div ng-show="registrationSuccess === true" class="ng-cloak">
			<div class="alert alert-success">You have been registered successfully!</div>	
			<a href="<?php echo PATH; ?>auth/login">Login</a>
		</div>
	</div>