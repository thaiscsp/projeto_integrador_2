@extends ('layouts.master')

@section('title', 'Logout | Cervejaria Dela')

@section('content')

<?php
		if ($usuario = Session::get('usuario')) {
?>

<div class='text-center'>
	<h2 style='font-weight:  bold; color: #ff4d4d;'>Logout</h2>
	<div class='form-group'>
		<br><p>Tem certeza de que deseja fazer logout?</p>
		<form id='logout' action='' method='POST'>
			@csrf
			<input type='submit' value='Fazer logout'>
			<br>
		</form>
	</div>

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