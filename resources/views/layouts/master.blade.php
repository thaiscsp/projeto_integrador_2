<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
			crossorigin="anonymous"
		/>
        <!-- 0. Owl Carousel Min.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- 1. Owl Carousel Theme.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/assets/favicon/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/assets/favicon/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/assets/favicon/favicon-16x16.png"
		/>
		<link rel="manifest" href="/site.webmanifest" />

		<style>
			@import url("https://fonts.googleapis.com/css2?family=Joan&display=swap");
            @import url('https://fonts.googleapis.com/css2?family=Stoke:wght@300;400&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap');

			body {
				overflow-x: hidden;
			}

			h1{
				font-family: "Stoke", serif;
			}

            .display-3, .display-5, .display-6{
                font-family: "Caveat", cursive;
            }

			/* Navbar */
			.navbar {
				box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
			}

			/*Nossas cervejas*/
			@media screen and (max-width: 567px) {
				.order-text {
					order: 1;
				}
				.order-img {
					order: 2;
				}
			}

			/* Conheça nossa cervejaria */

			@media screen and (max-width: 567px) {
				.container {
					text-align: center;
				}
				iframe {
					width: auto;
					height: auto;
				}
				.img-fluid {
					width: 80%;
				}
			}

			/*Galeria*/
			@media screen and (min-width: 568px) {
				.cards-wrapper {
					display: flex;
				}

				.card {
					margin: 0 0.5em;
					width: calc(100% / 3);
					border: none;
					box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
				}
			}

			@media screen and (max-width: 567px) {
				.card:not(:first-child) {
					display: none;
				}

				.card {
					border: none;
					box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
				}
			}

			/*Newsletter*/
			.newsletter {
				padding: 80px 0px;
				background-color: #19beda;
			}

			.newsletter .content {
				max-width: 650px;
				margin: 0 auto;
				text-align: center;
			}

			.newsletter .content h2 {
				margin-bottom: 40px;
				color: #243c4f;
			}

			.newsletter .content .form-control {
				height: 50px;
				border-color: #fff;
				border-radius: 0;
			}

			.newsletter .content .form-control:focus {
				box-shadow: none;
				border: 2px solid #243c4f;
			}

			.newsletter .content .btn {
				min-height: 50px;
				border-radius: 0;
				background-color: #243c4f;
				color: #fff;
				font-weight: 600;
			}
		</style>
</head>

<body id="#" class="d-flex flex-column min-vh-100">

	<!-- Navbar -->
		<header class="header">
			<nav class="navbar navbar-expand-lg bg-light navbar-light">
				<div class="container container-fluid">
					<a class="navbar-brand" href="/">
                        <img class="thumbnail" style="height: 40px" src="https://i.imgur.com/uvaHFiD.png" alt="">
                    </a>
					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarNav"
						aria-controls="navbarNav"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ms-auto">
							<!--<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="/#quem-somos"
									>Quem Somos</a
								>
							</li>-->
							<li class="cervejas nav-item">
								<a class="nav-link active" aria-current="page" href="/#cervejas"
									>Cervejas</a
								>
							</li>
							<li class="cervejaria nav-item">
								<a
									class="nav-link active"
									aria-current="page"
									href="/#cervejaria"
									>Cervejaria</a
								>
							</li>
							<li class="galeria nav-item">
								<a class="nav-link active" aria-current="page" href="/#galeria"
									>Galeria</a
								>
							</li>
							<li class="fale-conosco nav-item">
								<a class="nav-link active" aria-current="page" href="/#fale-conosco"
									>Fale Conosco</a
								>
							</li>

<?php

	if (Session::get('usuario')) {
		echo ("	<li class='nav-item'>
        			<a style='font-weight: bold;' class='text-black nav-link' href='/enviar'>Enviar e-mails</a>
      			</li>
      			<!--<li class='nav-item'>
        			<a style='font-weight: bold;' class='text-black nav-link' href='/gerenciar-admins'>Gerenciar admins</a>
      			</li>-->
      			<li class='nav-item'>
        			<a style='font-weight: bold;' class='text-black nav-link' href='/logout'>Logout</a>
      			</li>
			");
	}

	if (!(Session::has('usuario'))) {
		echo ('<li class="nav-item">
								<button
									type="button"
									class="btn btn-primary"
									data-bs-toggle="modal"
									data-bs-target="#staticBackdrop"
								>
									Acessar
								</button>
							</li>');
	}

	?>

						</ul>
					</div>
				</div>
			</nav>
		</header>

		<!-- Modal -->
		<div
			class="modal fade"
			id="staticBackdrop"
			data-bs-backdrop="static"
			data-bs-keyboard="false"
			tabindex="-1"
			aria-labelledby="staticBackdropLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">
							Acessar painel administrativo
						</h5>
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
					</div>
					<div class="modal-body">
						<form action="" method="POST">
							@csrf
							<input type="hidden" name="home" value="acessar-painel-administrativo">

							<div class="form-floating mb-3">
								<input
									type="email"
									class="form-control"
									id="email-login"
									name="email-login"
									required
								/>
								<label for="email-login" class="form-label"
									>Digite seu email</label
								>
								<div class="invalid-feedback">
									Por favor, digite um email válido!
								</div>
							</div>
							<div class="form-floating">
								<input
									type="password"
									class="form-control"
									name="senha-login"
									id="senha-login"
									required
								/>
								<label for="senha-login">Digite sua senha</label>
								<div class="invalid-feedback mb-1">
									Por favor, digite uma senha válida!
								</div>
							</div>
							<div class="modal-footer">
								<button
									type="button"
									class="btn btn-secondary"
									data-bs-dismiss="modal"
								>
									Fechar
								</button>
								<button type="submit" class="btn btn-primary">Confirmar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a style='font-weight: bold; color: #7B68EE; margin-left: 20px;' class="navbar-brand" href="/">Cervejaria Dela</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">
	-->

    		<!--</ul>
  		</div>
	</nav>-->
		<div class='row'>
		<div class='col-4'></div>
		<div class='col-4'></div>
		<div class='col-4'>
			<?php
				if ($usuario = Session::get('usuario')) {
					echo("<br>
						<div style='text-align: right;' id='mensagem'>
						<p>Usuário logado: <strong>" . $usuario . "&nbsp&nbsp&nbsp&nbsp&nbsp</strong></p>
						</div>
					");
			}?>
		</div>
	</div>

	@yield('content')

	<!-- Footer -->
		<div id="footer" style="width: 100%;" class="mt-auto">
		<footer class="bg-dark">
			<div class="pt-3 pb-3 text-center">
				<span class="text-white"
					>Cervejaria Dela₢ - Todos os direitos reservados</span
				>
			</div>
		</footer>
		</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $(".nav-item.cervejas").mouseover(function(){
            $(".nav-item.cervejas a").css({"color": "blue", "font-weight": "bold"});
        });
        $(".nav-item.cervejas").mouseout(function(){
            $(".nav-item.cervejas a").css({"color": "black", "font-weight": "normal"});
        });
        
        $(".nav-item.cervejaria").mouseover(function(){
            $(".nav-item.cervejaria a").css({"color": "blue", "font-weight": "bold"});
        });
        $(".nav-item.cervejaria").mouseout(function(){
            $(".nav-item.cervejaria a").css({"color": "black", "font-weight": "normal"});
        });
        
        $(".nav-item.galeria").mouseover(function(){
            $(".nav-item.galeria a").css({"color": "blue", "font-weight": "bold"});
        });
        $(".nav-item.galeria").mouseout(function(){
            $(".nav-item.galeria a").css({"color": "black", "font-weight": "normal"});
        });
        
        $(".nav-item.fale-conosco").mouseover(function(){
            $(".nav-item.fale-conosco a").css({"color": "blue", "font-weight": "bold"});
        });
        $(".nav-item.fale-conosco").mouseout(function(){
            $(".nav-item.fale-conosco a").css({"color": "black", "font-weight": "normal"});
        }); 
    });
</script>
</body>

</html>
