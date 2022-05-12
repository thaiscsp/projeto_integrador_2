@extends ('layouts.master')

@section('title', 'Cervejaria Dela')

@section('content')
<div class='text-center'>
	<div class='row'>
		<div class='col-4'></div>
		<div class='col-4'>
			<h2 style='font-weight: bold; color: #afa3f5'>Cadastro - Newsletter</h2>
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

	<form id='cadastro-newsletter' action='' method='POST'>
		@csrf
		<br>
		<label for='nome'><span style='color: red;'>*</span> Nome:</label>
		<input type='text' id='nome' name='nome' required>
		<br><br>
		<label for='email'><span style='color: red;'>*</span> Email:</label>
		<input type='email' id='email' name='email' required>
		<br><br>
		<input type='submit' value='Cadastrar'>
		<br>
	</form>

</div>
@stop