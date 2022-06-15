<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a style='font-weight: bold; color: #7B68EE; margin-left: 20px;' class="navbar-brand" href="/">Cervejaria Dela</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">

	<?php

	if (!(Session::has('usuario'))) {
		echo ("<li class='nav-item'>
        			<a style='font-weight: bold; color: #ff66ff;' class='nav-link' href='/login'>Login</a>
      			</li>");
	}

	if (Session::get('usuario')) {
		echo ("	<li class='nav-item'>
        			<a style='font-weight: bold; color: #51bac8;' class='nav-link' href='/enviar'>Enviar e-mails</a>
      			</li>
      			<li class='nav-item'>
        			<a style='font-weight: bold; color: #00e600;' class='nav-link' href='/admin/cadastro'>Cadastrar admin</a>
        		<li class='nav-item'>
        			<a style='font-weight: bold; color: #ffaf1a;' class='nav-link' href='/admin/remocao'>Remover admin</a>
      			</li>
      			</li>
      			<li class='nav-item'>
        			<a style='font-weight: bold; color: #ff4d4d;' class='nav-link' href='/logout'>Logout</a>
      			</li>
			");
	}

	?>

    		</ul>
  		</div>
	</nav><br>
		<div class='row'>
		<div class='col-4'></div>
		<div class='col-4'></div>
		<div class='col-4'>
			<?php
				if ($usuario = Session::get('usuario')) {
					echo("
						<div id='mensagem'>
						<p>Usuário logado: <strong>" . $usuario . "</strong></p>
						</div>
					");
			}?>
		</div>
	</div>
	
	<h1 class='text-center' style='font-weight: bold; color: #7B68EE'>Cervejaria Dela</h1>

	@yield('content')
	<br>

	<?php
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_URL => "https://instagram130.p.rapidapi.com/account-info?username=cervejariadela",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"X-RapidAPI-Host: instagram130.p.rapidapi.com",
				"X-RapidAPI-Key: 066c77207emsh826ed77c2e7db07p11bb2fjsn02e0577384bf"
			],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$response = json_decode($response);
		}
	?>

	<div class="footer text-white bg-dark">
		<div class="row">
			<div class="col-2">
				<img src="{{asset('storage/cervejariadela.jpg')}}">
			</div>
			<div class="col-10">
				<p style="padding-top: 26px;">
					Siga a <a href="https://www.instagram.com/cervejariadela/?hl=pt">Cervejaria Dela</a> no Instagram! | {{$response->edge_followed_by->count}} seguidores
				</p>
				<p>
					{{$response->biography}}
				</p>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>