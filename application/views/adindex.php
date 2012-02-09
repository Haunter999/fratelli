<?php if(isset($error)) 
echo('<p class="err">'.$error.'</p>');
?>

<h1>Ресторан Fratelli &mdash; административная панель</h1>

<form id="login" method="post">
	<label>Логин:</label>
		<br />
			<input class="text" name="login" type="text" maxlength="20" size="12" required />
		<br />
	<label>Пароль:</label>
		<br />
			<input class="text" name="pass" type="password" maxlength="20" size="12" required />
		<br />
			<input class="submit" type="submit" value="Войти" name="logsbmt" />
</form>