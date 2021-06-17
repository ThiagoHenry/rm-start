<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
		<link href="<?=base_url("assets/css/style.css")?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?=base_url("assets/fonts/css/font-awesome.css"); ?>" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

		<!-- GALERIA -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-6 mt-2">
						<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" class="d-block w-100" alt="...">
						    </div>
						  </div>
						  <button class="carousel-control-prev control-galery" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
								<i class="fa fa-angle-left fa-3x" aria-hidden="true"></i>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next control-galery" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
								<i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>
					</div>

				<!-- Gallery -->
					<div class="col-6 galery-moisaic">
						<div class="row">
						  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
						    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

						    <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
						  </div>

						  <div class="col-lg-4 mb-4 mb-lg-0">
						    <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

						    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
						  </div>

						  <div class="col-lg-4 mb-4 mb-lg-0">
						    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

						    <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<!-- Gallery -->

	<!-- TIME-LINE -->
		<section>
			<div class="container">
				<div class="">
					<h3 class="text-white-">PROJETOS ATÉ AGORA:</h3>
					<p class="mt-3"><?=date("n/Y");?></p>
				</div>

				<div class="">
					<table class="table table-bordered">
					  <thead>
					    <tr>
					      <th class="col-2" scope="col"><hr><span>Começo de tudo</span></th>
					      <th class="col-2" scope="col"><hr><span>Lojas</span></th>
					      <th class="col-2" scope="col"><hr><span>Residênciaas</span></th>
					      <th class="col-2" scope="col"><hr><span>Interiores</span></th>
					      <th class="col-2" scope="col"><hr><span>Corporativos</span></th>
					      <th class="col-2" scope="col"><hr><span>Clínicas</span></th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td scope="row"><span>2019</span><hr></td>
					      <td><span>2</span><hr></td>
					      <td><span>7</span><hr></td>
					      <td><span>19</span><hr></td>
					      <td><span>1</span><hr></td>
					      <td><span>1</span><hr></td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</section>

		<!-- TEXTO 1 -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-3">
						<h1>CRIADA PARA O AGORA E PENSANDO NO FUTURO.</h1>
					</div>
					<div class="col-9">
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
		<section>
			<div class="container p-5" style="background:gray">
				<h3 class="text-center">LAR LUXUOSO E COM CONFORTO AMBIENTAL</h5>
				<p class="mt-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</section>

		<!-- SOBRE -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-4">
						<img class="rounded-circle img-fluid"src="https://images.freeimages.com/images/premium/previews/2626/26264547-user-icon-on-black-technology-background.jpg" alt="">
					</div>
					<div class="col-4">
						<h5>SOBRE A ARQUITETA</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="col-4">
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  </body>
</html>
