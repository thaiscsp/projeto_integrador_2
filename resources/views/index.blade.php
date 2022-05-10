<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<title>Projeto</title>
</head>

<body>
	<h1>Projeto</h1>

	<form id='cadastro' action='' method='POST'>
		@csrf
		<label for='nome'>*Nome:</label>
		<input type='text' id='nome' name='nome' required>
		<label for='email'>*Email:</label>
		<input type='email' id='email' name='email' required>
		<input type='submit' value='Cadastrar'>
	</form>
</body>
</html>