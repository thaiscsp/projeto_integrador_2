@extends ('layouts.master')

@section('title', 'Enviar e-mails | Cervejaria Dela')

@section('content')

<?php

	if (Session::get('usuario')) {


		if ($mensagem = Session::get('mensagem')) {
			$mensagem = Session::get('mensagem') . '<br>';
		} else {
			$mensagem = '<br>Deseja enviar e-mails para todos os clientes?<br>';
		}

	?>

<div class='text-center'>
	<h2 style='font-weight:  bold; color: #51bac8;'>Enviar e-mails</h2>
	

	<div class='form-group'>
		<p><?php echo($mensagem); ?></p>
		<form id='enviar' action='' method='POST'>
			@csrf
			<input type='submit' value='Enviar'>
			<br>
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