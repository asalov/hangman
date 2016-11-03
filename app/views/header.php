<!DOCTYPE html>
<html lang="en" ng-app="hangmanApp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo PATH; ?>css/style.css">
	<title><?php echo ($this->get('title')) ? $this->get('title') . ' | ' : '';?><?php echo MAIN_TITLE; ?></title>
</head>
<body>
	<div class="container">
		<?php if($this->get('loggedIn') === true): ?>
			<a href="<?php echo PATH; ?>auth/logout" class="btn btn-warning" role="button">Logout</a>
		<?php endif; ?>