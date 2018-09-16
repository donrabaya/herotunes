<?php 
	
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account();

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Slotify</title>
</head>
<body>
	
	<div id="inputContainer">

		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>

				<label for="loginUsername">Username:</label>
				<input id="loginUsername" type="text" name="loginUsername" placeholder="e.g. bart" required>
			</p>
			<p>
				<label for="loginPassword">Password:</label>
				<input id="loginPassword" type="password" name="loginPassword" placeholder="Your Password" required>
			</p>

			<button type="submit" name="loginButton">Login</button>			
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<label for="username">Username:</label>
				<input id="username" type="text" name="username" placeholder="e.g. bart" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$firstNameCharacters); ?>

				<label for="firstName">First Name:</label>
				<input id="firstName" type="text" name="firstName" placeholder="e.g. Bart" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$lastNameCharacters); ?>

				<label for="lastName">Last name:</label>
				<input id="lastName" type="text" name="lastName" placeholder="e.g. Simpson" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<label for="email">Email:</label>
				<input id="email" type="email" name="email" placeholder="e.g. bart@gmail.com" required>
			</p>
			<p>
				<label for="email2">Confirm Email:</label>
				<input id="email2" type="email" name="email2" placeholder="e.g. bart@gmail.com" required>
			</p>			
			<p>
				<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="password">Password:</label>
				<input id="password" type="password" name="password" placeholder="Your Password" required>
			</p>
			<p>
				<label for="password2">Confirm password:</label>
				<input id="password2" type="password" name="password2" placeholder="Confirm password" required>
			</p>

			<button type="submit" name="registerButton">SIGN UP</button>			
		</form>

	</div>

</body>
</html>