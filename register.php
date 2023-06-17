<?php
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name)
{
	if (isset($_POST[$name])) {
		echo $_POST[$name];
	}
}
?>

<html>

<head>
	<title>MusicApp</title>

	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>

<body>
	<?php

	if (isset($_POST['registerButton'])) {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			</script>';
	} else {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			</script>';
	}

	?>


	<div id="background">

		<div id="loginContainer">

			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2>Войдите в свой аккаунт</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Логин</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="" value="<?php getInputValue('loginUsername') ?>" required autocomplete="off">
					</p>
					<p>
						<label for="loginPassword">Пароль</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="" required>
					</p>

					<button type="submit" name="loginButton">ВОЙТИ</button>

					<div class="hasAccountText">
						<span id="hideLogin">Еще нет аккаунта? Зарегистрируйтесь здесь.</span>
					</div>

				</form>



				<form id="registerForm" action="register.php" method="POST">
					<h2>Создайте аккаунт</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
						<label for="username">Логин</label>
						<input id="username" name="username" type="text" placeholder="" value="<?php getInputValue('username') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">Имя</label>
						<input id="firstName" name="firstName" type="text" placeholder="" value="<?php getInputValue('firstName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Фамилия</label>
						<input id="lastName" name="lastName" type="text" placeholder="" value="<?php getInputValue('lastName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Электронная почта</label>
						<input id="email" name="email" type="email" placeholder="" value="<?php getInputValue('email') ?>" required>
					</p>

					<p>
						<label for="email2">Подтвердить почту</label>
						<input id="email2" name="email2" type="email" placeholder="" value="<?php getInputValue('email2') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="password">Пароль</label>
						<input id="password" name="password" type="password" placeholder="" required>
					</p>

					<p>
						<label for="password2">Подтвердить пароль</label>
						<input id="password2" name="password2" type="password" placeholder="" required>
					</p>

					<button type="submit" name="registerButton">ЗАРЕГИСТРИРОВАТЬСЯ</button>

					<div class="hasAccountText">
						<span id="hideRegister">Уже есть аккаунт? Войдите здесь.</span>
					</div>

				</form>


			</div>

			<div id="loginText">
				<h1>Получите доступ к отличной музыке прямо сейчас</h1>
				<h2>Слушайте кучу песен бесплатно
				</h2>
				<ul>
					<li>Откройте для себя новую музыку</li>
					<li>Создавайте собственные плейлисты</li>
					<li>Следите за своими любимыми исполнителями, чтобы не упустить новинки</li>
				</ul>
			</div>

		</div>
	</div>

</body>

</html>