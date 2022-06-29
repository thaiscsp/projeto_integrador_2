@extends ('layouts.master')

@section('title', 'Logout | Cervejaria Dela')

@section('content')

<?php
		if ($usuario = Session::get('usuario')) {
?>

<div class='text-center'>
	<p class="display-5">LOGOUT</p>
	<div class='form-group'>
		<br><p class="lead">Tem certeza de que deseja fazer logout?</p><br>
		<form id='logout' action='' method='POST'>
			@csrf
			<input class='btn btn-danger' type='submit' value='Fazer logout'>
			<br>
		</form>
	</div>
	<br>

	<?php
		if ($mensagem = Session::get('mensagem')) {
			echo("
					<div id='mensagem'>
						<p>" . $mensagem . "</p>
					</div>
				");
		}
	?>

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