<?php  
include("includes/includedFiles.php");
?>

<div class="entityInfo">

	<div class="centerSection">
		<div class="userInfo">
			<h1><?php echo $userLoggedIn->getFirstAndLastName(); ?></h1>
		</div>
	</div>

	<div class="buttonItems">
		<button class="button" onclick="openPage('updateDetails.php')">ДАННЫЕ ПОЛЬЗОВАТЕЛЯ</button>
		<button class="button" onclick="logout()">ВЫЙТИ ИЗ АККАУНТА</button>
	</div>


</div>