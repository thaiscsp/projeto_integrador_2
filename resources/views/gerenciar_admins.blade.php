@extends ('layouts.master')

@section('title', 'Gerenciar admins | Cervejaria Dela')

@section('content')

<?php
		if ($usuario = Session::get('usuario')) {
?>

<div class='text-center'>
	<p class="display-5">GERENCIAR ADMINS</p>

	<?php
		

		if ($mensagem = Session::get('mensagem')) {
			echo("
					<br><div id='mensagem'>
						<p>" . $mensagem . "</p>
					</div>
				");
		}
	?>

	<!-- cadastrar admins -->
	<br><p class="lead">Cadastrar novo admin:</p>
	<div class='form-group'>
		<form id='cadastro-admin' action='' method='POST'>
			@csrf
			<input type="hidden" name="gerenciar-admins" value="cadastrar-admin">
			<br>
			<label for='email-cadastro'><span style='color: red;'>*</span> E-mail:</label>
			<input type='email' id='email' name='email-cadastro' required>
			<br><br>
			<label for='senha-cadastro'><span style='color: red;'>*</span> Senha:</label>
			<input type='password' id='senha' name='senha-cadastro' required>
			<br><br>
			<input type='submit' value='Cadastrar'>
			<br>
		</form>
	</div><br><br>

	<!-- remover admins -->
	<p class="lead">Remover admin cadastrado:</p>
	<div class='form-group'>
		<form id='remocao-admin' action='' method='POST'>
			@csrf
			<input type="hidden" name="gerenciar-admins" value="remover-admin">
			<br>
			<label for='email-remocao'><span style='color: red;'>*</span> E-mail:</label>
			<input type='email-remocao' id='email' name='email' required>
			<br><br>
			<input type='submit' name='Remover' value='Remover'>
			<br>
		</form>
	</div><br><br>

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
