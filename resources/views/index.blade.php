@extends ('layouts.master')

@section('title', 'Cervejaria Dela')

@section('content')
<!--<div class='text-center'>
	<div class='row'>
		<div class='col-4'></div>
		<div class='col-4'>
			<h2 style='font-weight: bold; color: #afa3f5'>Cadastro - Newsletter</h2>
		</div>
		<div class='col-4'></div>
	</div>-->
	<?php

		if ($mensagem = Session::get('mensagem')) {
			echo("
					<br><div class='text-center' id='mensagem'>
						<p>" . $mensagem . "</p>
					</div>
				");
		}
	?>	

		<!-- Quem somos -->
		<div id="quem-somos"></div>

		<!-- Nossas cervejas -->
		<div class="" id="cervejas">
			<div class="bg-dark">
				<div class="container">
					<h1
						class="text-center text-white mb-0 py-4 display-4 border-bottom border-white"
					>
						NOSSAS CERVEJAS
					</h1>
				</div>
			</div>
            <!-- LAGER -->
			<section class="bg-dark">
                <div class="container p-4 p-md-5">
                    <div class="row text-center mx-auto">
                        <div class="col-md-8 text-white">
                            <p class="display-5">LAGER</p>
                            <p class="display-6">A força única!</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Repellendus quos fugit quas asperiores cum error, neque sequi velit
                                mollitia excepturi aliquam debitis rem vel autem possimus, dicta.
                                Non, quasi, quod!
                            </p>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <blockquote class="imgur-embed-pub" lang="en" data-id="vA9buFK"><a href="https://imgur.com/vA9buFK">View post on imgur.com</a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
                            <img class="img-fluid rounded" src="https://imgur.com/vA9buFK" alt="" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- IPA -->
			<section class="bg-light">
                <div class="container p-4 p-md-5">
                    <div class="row text-black text-center mx-auto">
                        <div class="col-md-4 order-img">
                            <img class="img-fluid rounded" src="{{asset('storage/photo-5.jpeg')}}" alt="" />
                        </div>
                        <div class="col-md-8 order-text">
                            <p class="display-5">IPA</p>
                            <p class="display-6">A força marcante!</p>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Repellendus quos fugit quas asperiores cum error, neque sequi
                                velit mollitia excepturi aliquam debitis rem vel autem possimus,
                                dicta. Non, quasi, quod!
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WEISS -->
			<section class="bg-dark">
                <div class="container p-4 p-md-5">
                    <div class="row text-white text-center mx-auto">
                        <div class="col-md-8">
                            <p class="display-5">WEISS</p>
                            <p class="display-6">A força potente!</p>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Repellendus quos fugit quas asperiores cum error, neque sequi velit
                                mollitia excepturi aliquam debitis rem vel autem possimus, dicta.
                                Non, quasi, quod!
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid rounded" src="{{asset('storage/photo-6.jpeg')}}" alt="" />
                        </div>
                    </div>
                </div>
            </section>
		</div>

		<!-- Video -->
        <section class="bg-light">
            <div class="container" id="cervejaria">
                        <h1 class="text-center mb-0 py-4 display-4 border-bottom border-dark">
                            <strong>NOSSA CERVEJARIA</strong>
                        </h1>
                <div class="row text-center mx-auto bg-light p-4">
                    <div class="col-md-6">
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat
                            quasi nobis odit quam mollitia sequi hic soluta accusamus
                            perspiciatis, cum tenetur aperiam quisquam vitae tempora impedit
                            earum inventore vel quod!
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/TBtiqILCqZ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Galeria -->
        <section class="bg-dark" id="galeria">
            <div class="container">
                <div class="bg-dark">
                    <div class="container">
                        <h1
                            class="text-center mb-0 py-4 text-white display-4 border-bottom border-white"
                        >
                            <strong>GALERIA</strong>
                        </h1>
                    </div>
                </div>
                <div class="row border-white">
                    <div class="owl-carousel owl-theme p-3">
                        <div class="item">
                            <div class="card w-100">
                                <img class="img-fluid" src="/assets/photo-1.jpeg" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="card w-100">
                                <img src="/assets/photo-2.jpeg" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="card w-100">
                                <img src="/assets/photo-3.jpeg" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="card w-100">
                                <img src="/assets/photo-4.jpeg" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="card w-100">
                                <img src="/assets/photo-5.jpeg" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="card w-100">
                                <img src="/assets/photo-6.jpeg" class="card-img-top" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<!-- Fale conosco -->
        <section class="bg-light" id="fale-conosco">
             <div class="container">
                <div class="text-center">
                    <h1
                    class="text-center mb-0 py-4 display-4 border-bottom border-dark"
                >
                    <strong>FALE CONOSCO</strong>
                </h1>
                </div>
			<div class="row">
				<div class="col-lg-6 p-4 bg-light">
                    <h2 class="h6 text-center">
                        ENVIE SUA DÚVIDA
                    </h2>
                    <form class="bg-light rounded" action="" method="POST">
                        @csrf
                        <input type="hidden" name="home" value="enviar-mensagem">
						<div class="form-floating mb-3">
							<input
								type="email"
								class="form-control"
								id="email-mensagem"
                                name="email-mensagem"
								placeholder="name@example.com"
							/>
							<label for="email-mensagem">Email</label>
						</div>
						<div class="form-floating">
							<input
								type="text"
								class="form-control"
								id="nome-mensagem"
                                name="nome-mensagem"
                                placeholder="Nome"
							/>
							<label for="nome-mensagem">Nome</label>
						</div>
                        <div class="form-floating">
                            <textarea class="form-control mt-3" placeholder="Deixe um comentário aqui" id="mensagem" name="mensagem" style="height: 150px"></textarea>
                            <label for="mensagem">Mensagem</label>
                          </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary mt-3">Enviar Mensagem</button>
                        </div>
					</form>
				</div>
                <div class="col-lg-6 p-4">
                    <h2 class="h6 text-center">
                        NOSSO ENDEREÇO
                    </h2>
                    <iframe class="col-sm w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.8146507461593!2d-46.8826528846986!3d-21.593156885695308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b7cd76ba5d6039%3A0xb8bd5b1a5d5d5b1e!2sDela%20Cervejaria!5e0!3m2!1sen!2sbr!4v1656117189510!5m2!1sen!2sbr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <div class="row text-center py-4">
                        <div class="col">
                            <h2 class="h6">DADOS DE CONTATO</h2>
                            <ul class="list-unstyled text-secondary">
                                <li>cervejariadela@dela.com</li>
                                <li>21 99999-9999</li>
                                <li>De Seg. à Sex. das 8h às 18h</li>
                            </ul>
                        </div>

    <!-- API Instagram -->
    <?php


$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://instagram47.p.rapidapi.com/user_followers?userid=27313721371",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: instagram47.p.rapidapi.com",
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

                        <div class="col">
                            <h4 class="h6">REDES SOCIAIS</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a
                                        href="https://www.facebook.com/pages/category/Product-service/Dela-Cervejaria-104135071119257/"
                                        class="btn btn-sm btn-outline-secondary d-block mb-2"
                                        >Facebook</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.instagram.com/cervejariadela/?hl=en"
                                        class="btn btn-sm btn-outline-secondary d-block mb-2"
                                        >Instagram | <!--{ {$response->body->count} }--> seguidores </a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.youtube.com/watch?v=TBtiqILCqZ8"
                                        class="btn btn-sm btn-outline-secondary d-block mb-2"
                                        >Youtube</a
                                    >
                                </li>
                            </ul>
                        </div>
                </div>
			</div>
             </div>
		</section>

		<!-- Newsletter -->
		<section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="content">
							<h2>Inscreva-se para receber as novidades!</h2>
							<form action="" method="POST">
							@csrf
                            <input type="hidden" name="home" value="cadastrar-cliente">
							<div class="input-group">
								<input
									name="email-cadastro"
									type="email"
									class="form-control"
									id="floatingInput"
									placeholder="Coloque o seu melhor e-mail"
								/>
								<span class="input-group-btn bg-dark rounded">
									<button class="btn" type="submit">Inscrever</button>
								</span>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
			crossorigin="anonymous"
		></script>

        <!-- 1. Owl Carousel Jquery.min.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- 0. Owl Carousel Min.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- 2. Owl Carousel init -->
		<script>
			(function () {
				"use strict";

				var forms = document.querySelectorAll(".needs-validation");

				Array.prototype.slice.call(forms).forEach(function (form) {
					form.addEventListener(
						"submit",
						function (event) {
							if (!form.checkValidity()) {
								event.preventDefault();
								event.stopPropagation();
							}

							form.classList.add("was-validated");
						},
						false
					);
				});
			})();

            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots:false,
                autoplay: true,
                smartSpeed: 300,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    }
                }
            })
		</script>





@stop
