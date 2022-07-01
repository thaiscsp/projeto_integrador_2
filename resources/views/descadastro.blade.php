@extends ('layouts.master')

@section('title', 'Descadastro | Cervejaria Dela')

@section('content')

<?php
		if ($email) {
?>

<div class='text-center'>
	<br><p class="display-5">DESCADASTRO</P>
	<div class='form-group'>
		<br><p class="lead">Tem certeza de que deseja se descadastrar?<br>Você não receberá mais e-mails.</p>
		<form id='logout' action='' method='POST'>
			@csrf
			<input type='submit' value='Descadastrar'>
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
