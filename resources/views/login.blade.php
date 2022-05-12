@extends ('layouts.master')

@section('title', 'Login | Cervejaria Dela')

@section('content')
<div class='text-center'>
	<div class='row'>
		<div class='col-4'></div>
		<div class='col-4'>
			<h2 style='font-weight: bold; color: #ff66ff;'>Login</h2>
		</div>
		<div class='col-4'></div>
	</div>

	<?php
		

		if ($mensagem = Session::get('mensagem')) {
			echo("
					<br><div id='mensagem'>
						<p>" . $mensagem . "</p>
					</div>
				");
		}

		if (!($usuario = Session::get('usuario'))) {
	?>

	<div class='form-group'>
		<form id='login' action='' method='POST'>
			@csrf
			<br>
			<label for='email'><span style='color: red;'>*</span> E-mail:</label>
			<input type='email' id='email' name='email' required>
			<br><br>
			<label for='senha'><span style='color: red;'>*</span> Senha:</label>
			<input type='password' id='senha' name='senha' required>
			<br><br>
			<input type='submit' value='Logar'>
			<br>
		</form>
	</div>

	<!--<button type='button' class='btn btn-light'>
		<a class='text-dark' href='/emails/personalizar' style='text-decoration: none;'>Personalizar envio de e-mail</a>
	</button>-->
</div>
<?php } ?>
@stop