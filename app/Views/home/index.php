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
  <body style="background-image: url('<?=base_url('assets/img/background.png')?>');">

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

	<!-- Gallery -->

	<!-- TIME-LINE -->
		<section id="timeline">
			<div class="container" style="background-image: url('<?=base_url('assets/img/background.png')?>');">
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
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-12">
						<h1>CRIADA PARA O AGORA E PENSANDO NO FUTURO.</h1>
					</div>
					<div class="col-lg-9 col-12">
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
			<div class="container p-5" >
        <!-- <div class="bg2" style="background-image: url('<?=base_url('assets/img/lar.png')?>');" > -->
        <div class="row justify-content-center">
          <div class="position-absolute col-lg-9 col-12">
            <h3 class="text-center">LAR LUXUOSO E COM CONFORTO AMBIENTAL</h5>
            <p class="mt-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
            <img class="img-fluid" src="<?=base_url('assets/img/lar.png')?>" alt="">
        </div>
        </div>
			<!-- </div> -->
		</section>

		<!-- SOBRE -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-12">
						<img class="mx-auto d-block col-lg-10 col-8 rounded-circle img-fluid" src="<?=base_url('assets/img/perfil.jpg')?>" alt="">
					</div>
					<div class="col-lg-4 col-12">
						<h5>SOBRE A ARQUITETA</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="col-lg-4 col-12">
						<h5>AGENDE UMA REUNIÃO ONLINE PRESENCIAL</h5>
						<p><strong>Atendimento</strong></p>
						<a href="raianymarquesprojetos@gmail.com">raianymarquesprojetos@gmail.com</a>
						<p>(31 9 9999-9999)</p>
						<p>Contagem, MG. 32143-680, Brasil</p>
						<p>instagram: <a href="#">@raiany.arq3d</a></p>
					</div>
				</div>
			</div>

		</section>


    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src = "<?=base_url('/assets/js/script.js')?>"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src = "<?=base_url('/assets/OwlCarousel/dist/owl.carousel.min.js')?>"></script>
  </body>
</html>
