@extends ('layouts.master')

@section('title', 'Cadastrar admin | Cervejaria Dela')

@section('content')

<?php
		if ($usuario = Session::get('usuario')) {
?>

<div class='text-center'>
	<div class='row'>
		<div class='col-4'></div>
		<div class='col-4'>
			<h2 style='font-weight: bold; color: #00e600;'>Cadastrar admin</h2>
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
	?>

	<div class='form-group'>
		<form id='cadastro-admin' action='' method='POST'>
			@csrf
			<br>
			<label for='email'><span style='color: red;'>*</span> E-mail:</label>
			<input type='email' id='email' name='email' required>
			<br><br>
			<label for='senha'><span style='color: red;'>*</span> Senha:</label>
			<input type='password' id='senha' name='senha' required>
			<br><br>
			<input type='submit' value='Cadastrar'>
			<br>
		</form>
	</div>

</div>

<?php
} else {
	echo (	'<div class="text-center">
				<br><p style="font-weight: bold;">Acesso negado.</p>
			</div>'
		);
}
?>

@stop