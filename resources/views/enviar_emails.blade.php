@extends ('layouts.master')

@section('title', 'Enviar e-mails | Cervejaria Dela')

@section('content')

<?php

	if (Session::get('usuario')) {


		if ($mensagem = Session::get('mensagem')) {
			$mensagem = Session::get('mensagem') . '<br>';
		} else {
			$mensagem = '<br><p class="lead">Deseja enviar e-mails para todos os clientes?</p><br>';
		}

	?>

<div class='text-center'>
	<p class="display-5">ENVIAR E-MAILS</p>
	

	<div class='form-group'>
		<p><?php echo($mensagem); ?></p>
		<form id='enviar' action='' method='POST'>
			@csrf
			<input type='submit' value='Enviar'>
			<br><br>
		</form>
	</div>

	<!--<button type='button' class='btn btn-light'>
		<a class='text-dark' href='/emails/personalizar' style='text-decoration: none;'>Personalizar envio de e-mail</a>
	</button>-->

</div>

<?php

	} else {
		echo ('	<div class="text-center">
					<br><p style="font-weight: bold;">Acesso negado.</p>
				</div>');
	}

?>
@stop