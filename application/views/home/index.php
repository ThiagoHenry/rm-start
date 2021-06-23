<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
		<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/fonts/css/font-awesome.css'); ?>" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link  rel = " stylesheet " href = "<?=base_url('/assets/OwlCarousel/dist/assets/owl.carousel.min.css')?>"/>


    <title>Hello, world!</title>
  </head>
  <!-- <body style="background-color: gray"> -->
  <body style="background-image: url('<?=base_url('assets/img/background.png')?>');">
    <!-- <body> -->

    <section id="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark-opacity">
        <a class="navbar-brand ms-3" href="#"><img class="img-fluid pe-2" width="54px" src="<?=base_url('assets/img/logo.png')?>" alt="">Raiany Marques</a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active px-3" aria-current="page" href="#">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#sobre">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>


    <div class="mx-auto container-persona">

		<!-- GALERIA -->
		<section id="gallery">
			<div class="container">
				<div class="row">
          <div class="swiper-container gallery-top">
             <div class="swiper-wrapper">
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
               <div class="swiper-slide" style="background-image:url(https://source.unsplash.com/random)"></div>
             </div>
             <!-- Add Arrows -->
             <div class="swiper-navegation swiper-button-next swiper-button-white"></div>
             <div class="swiper-navegation swiper-button-prev swiper-button-white"></div>
           </div>
           <div class="swiper-container gallery-thumbs">
             <div class="swiper-wrapper">
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
                <div class="swiper-slide mx-1 rounded-circle" style="background-image:url(https://source.unsplash.com/random)"></div>
             </div>
           </div>
				</div>
			</div>
		</section>
    <!-- FIM GALERIA -->


	<!-- TIME-LINE -->
		<!-- <section id="timeline">
			<div class="container pt-5 p-md-5" style="background-image: url('<?=base_url('assets/img/background.png')?>');">
				<div class="">
					<h3 class="text-white-">PROJETOS ATÉ AGORA:</h3>
					<p class="mt-3"><?=date("n/Y");?></p>
				</div>

        <div class="col-12 timeline">
          <div class="owl-carousel owl-theme">
            <?php
            for ($i=0; $i < count($projetos); $i++) { ?>
              <div class="item fw-bold"><hr>
                <p class="sub-titulo"><?=$projetos[$i]['titulo']?></p>
                <p class="pb-5 fa-2x"><?=$projetos[$i]['quantidade']?></p><hr>
              </div>
            <?php } ?>
          </div>
        </div>
			</div>
		</section> -->

		<!-- TEXTO 1 -->
		<section class="section-text1 mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-12">
						<h1>CRIADA PARA O AGORA E PENSANDO NO FUTURO.</h1>
					</div>
					<div class="col-lg-8 col-12 pt-2">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
						</p>
						<p>
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- TEXTO 2 -->
		<section id="section-texto2">
			<div class="container py-5 px-0">
  			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  				<div class="carousel-inner">
  					<div class="carousel-item active">
  					<img src="<?=base_url('assets/img/lar.png')?>" class="d-block w-100" alt="...">
  					<div class="carousel-caption">
  						<h1>LAR LUXUOSO E COM CONFORTO AMBIENTAL</h1>
  						<p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolor, saepe voluptates excepturi a dolore illo sint quia modi eligendi laudantium. Aliquam praesentium et illum saepe reprehenderit reiciendis amet earum.</p>
  					</div>
  					</div>
  				</div>
  			</div>
			</div>
		</section>

		<!-- SOBRE -->
		<section id="sobre">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-12 mb-md-0 mb-4">
						<img class="mx-auto d-block col-lg-10 col-8 rounded-circle img-fluid" src="<?=base_url('assets/img/perfil.jpg')?>" alt="">
					</div>
					<div class="col-lg-4 col-12 mb-md-0 mb-4">
						<h5>SOBRE A ARQUITETA</h5>
            <p>
              <?= $sobre['texto']?>
            </p>
					</div>
					<div id="contact" class="col-lg-4 col-12">
            <p><?= $contato['texto'] ?></p>
						<!-- <h5>AGENDE UMA REUNIÃO ONLINE E PRESENCIAL</h5>
						<p><strong>Atendimento:</strong></p>
						<a class="text-decoration-none text" href="mailto:raianymarquesprojetos@gmail.com"><p>raianymarquesprojetos@gmail.com</p></a>
						<p>(31) 9 9999-9999</p>
						<a class="text-decoration-none" href="https://www.google.com.br/maps/place/Raiany+Marques+Arquitetura+3D/@-19.880596,-44.049449,17z/data=!3m1!4b1!4m5!3m4!1s0xa69579c241a221:0x6e78ba86de3b3536!8m2!3d-19.8806081!4d-44.0472665" target="_blank"><p>Contagem, MG. 32143-680, Brasil</p></a>
            <a class="text-decoration-none" href="https://www.instagram.com/raiany.arq3d" target="_blank"><p>instagram: @raiany.arq3d</p></a> -->
					</div>
				</div>
			</div>
		</section>
  </div>

    <section class="bg-dark">
      <footer>
        <div class="container py-4">
          <div class="row">

            <div class="col-lg-4 col-12 my-2 order-2 order-sm-1 text-white centered-x1">
              <span>TODOS OS DIREITOS RESERVADOS &copy</span>
            </div>

            <div class="col-lg-4 col-12 my-2 order-3 order-sm-2">
              <div class="text-center">
                <img class="img-fluid" width="80px" src="<?=base_url('assets/img/logo.png')?>" alt="">
                <span class="text-white ps-1">raiany marques projetos</span>
              </div>
            </div>

            <div class="col-lg-4 col-12 my-2 order-0 order-sm-3 text-white centered-x1">
              <div class="sociais">
                <a href="#" class="social mx-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="social mx-1" data-bs-toggle="tooltip" data-bs-placement="top" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="social mx-1" data-bs-toggle="tooltip" data-bs-placement="top" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#" class="social mx-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="py-2 text-center">
          <span class="text-white text-muted">Desenvolvido por: Thiago Henrique &copy <?=date("Y");?></span>
        </div>
      </footer>
    </section>

    <a class="icon-wpp" href="https://api.whatsapp.com/send?l=pt&amp;phone=55041999999" target="_blank">
      <img src="<?=base_url('/assets/img/icon-wpp.png')?>" style="height:50px; position:fixed; bottom: 25px; right:25px; z-index:99999;" data-selector="img">
    </a>


    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src = "<?=base_url('/assets/js/script.js')?>"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- <script src = "<?=base_url('/assets/OwlCarousel/dist/owl.carousel.min.js')?>"></script> -->
  </body>
</html>
