<?php 

require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form action="create.php" method="POST" onsubmit="return validate_form();">
		<label>Регистрация</label>
		<input type="text" name="familia" placeholder="Введите свою фамилию" required>
		<input type="text" name="ima" placeholder="Введите свое имя" required>
		<input type="text" name="otchestvo" placeholder="Введите свое отчество" required>
		<input type="email" name="email" placeholder="Введите свою почту" required>
		<input type="password" name="password" placeholder="Введите свой пароль" required> <br><br>
		<button type="submit">Зарегестрироваться</button>
		
		<p>
            У вас уже есть аккаунт? - <a href="ekz_avor.php">авторизируйтесь</a>!
        </p>
	</form>
	<script type="text/javascript">
		function validate_form(){
			alert("Регистрация прошла успешно")
		}
	</script>
</body>
</html>