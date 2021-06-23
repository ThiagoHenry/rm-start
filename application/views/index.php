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


    <link  rel = " stylesheet " href = "<?=base_url('/assets/OwlCarousel/dist/assets/owl.carousel.min.css')?>"/>


    <title>Hello, world!</title>
  </head>
  <!-- <body style="background-color: gray"> -->
  <body style="background-image: url('<?=base_url('assets/img/background.png')?>');">

    <section id="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark-opacity">
        <!-- <div class="container-fluid"> -->
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
                <a class="nav-link px-3" href="#timeline">Projetos até agora</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#sobre">Sobre</a>
              </li>
            </ul>
          </div>
        <!-- </div> -->
      </nav>
    </section>



		<!-- GALERIA -->
		<section id="gallery">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12 mt-2">
						<div class="owl-carousel owl-theme">
							<div data-hash="teste"><img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="d-block w-100" alt="..."></div>
							<div data-hash="teste1"><img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" class="d-block w-100" alt="..."></div>
							<div data-hash="teste2"><img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" class="d-block w-100" alt="..."></div>
						</div>
					</div>

				<!-- Gallery -->
					<div class="col-lg-6 col-12 galery-moisaic">
						<div class="row">
						  <div class="col-lg-4 col-4 col-md-12 mb-4 mb-lg-0">
                <a href="#teste1"><img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" /></a>
						    <a href="#teste2"><img src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" /></a>
						  </div>

						  <div class="col-lg-4 col-4 mb-4 mb-lg-0">
						    <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			          <a href="#teste"><img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" /></a>
						  </div>

						  <div class="col-lg-4 col-4 mb-4 mb-lg-0">
						    <a><img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" /></a>
						    <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<!-- TIME-LINE -->
		<section id="timeline">
			<div class="container pt-5 p-md-5" style="background-image: url('<?=base_url('assets/img/background.png')?>');">
				<div class="">
					<h3 class="text-white-">PROJETOS ATÉ AGORA:</h3>
					<p class="mt-3"><?=date("n/Y");?></p>
				</div>

        <div class="col-12 timeline">
          <div class="owl-carousel owl-theme">
            <div class="item fw-bold"><hr>
              <p class="sub-titulo">Começo de tudo</p>
              <p class="pb-5 fa-2x">2019</p><hr>
            </div>
            <div class="item fw-bold"><hr>
              <p class="sub-titulo">Lojas</p>
              <p class="pb-5 fa-2x">2</p><hr>
            </div>
            <div class="item fw-bold"><hr>
              <p class="sub-titulo">Residências</p>
              <p class="pb-5 fa-2x">7</p><hr>
            </div>
            <div class="item fw-bold"><hr>
              <p class="sub-titulo">Interiores</p>
              <p class="pb-5 fa-2x">19</p><hr>
            </div>
            <div class="item fw-bold"><hr>
              <p class="sub-titulo">Corporativos</p>
              <p class="pb-5 fa-2x">1</p><hr>
            </div>
            <div class="item fw-bold"><hr>
              <p class="sub-titulo">Clínicas</p>
              <p class="pb-5 fa-2x">1</p><hr>
            </div>
          </div>
        </div>
			</div>
		</section>

		<!-- TEXTO 1 -->
		<section class="section-text1 mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-12">
						<h1>CRIADA PARA O AGORA E PENSANDO NO FUTURO.</h1>
					</div>
					<div class="col-lg-9 col-12 pt-2">
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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="col-lg-4 col-12">
						<h5>AGENDE UMA REUNIÃO ONLINE PRESENCIAL</h5>
						<p><strong>Atendimento:</strong></p>
						<a class="text-decoration-none text" href="mailto:raianymarquesprojetos@gmail.com"><p>raianymarquesprojetos@gmail.com</p></a>
						<p>(31) 9 9999-9999</p>
						<a class="text-decoration-none" href="https://www.google.com.br/maps/place/Raiany+Marques+Arquitetura+3D/@-19.880596,-44.049449,17z/data=!3m1!4b1!4m5!3m4!1s0xa69579c241a221:0x6e78ba86de3b3536!8m2!3d-19.8806081!4d-44.0472665" target="_blank"><p>Contagem, MG. 32143-680, Brasil</p></a>
            <a class="text-decoration-none" href="https://www.instagram.com/raiany.arq3d" target="_blank"><p>instagram: @raiany.arq3d</p></a>
					</div>
				</div>
			</div>
		</section>

    <section class="bg-dark">
      <footer>
        <div class="container py-4">
          <div class="row">

            <div class="col-lg-4 col-12 text-white">
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
            </div>

            <div class="col-lg-4 col-12">
              <img class="img-fluid" width="80px" src="<?=base_url('assets/img/logo.png')?>" alt="">
              <span class="text-white ps-1">raiany marques projetos</span>
            </div>

            <div class="col-lg-4 col-12 text-white">
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

    <a class="icon-wpp" href="https://api.whatsapp.com/send?l=pt&amp;phone=55041999999">
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

    <script src = "<?=base_url('/assets/OwlCarousel/dist/owl.carousel.min.js')?>"></script>
  </body>
</html>
