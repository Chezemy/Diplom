<?php
include("includes/includedFiles.php");
?>

<div class="userDetails">

	<div class="container borderBottom">
		<h2>ПОЧТА</h2>
		<input type="text" class="email" name="email" placeholder="Email address..." value="<?php echo $userLoggedIn->getEmail(); ?>">
		<span class="message"></span>
		<button class="button" onclick="updateEmail('email')">СОХРАНИТЬ</button>
	</div>

	<div class="container">
		<h2>ПАРОЛЬ</h2>
		<input type="password" class="oldPassword" name="oldPassword" placeholder="Текущий пароль">
		<input type="password" class="newPassword1" name="newPassword1" placeholder="Новый пароль">
		<input type="password" class="newPassword2" name="newPassword2" placeholder="Подтвердить пароль">
		<span class="message"></span>
		<button class="button" onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">СОХРАНИТЬ</button>
	</div>

</div>