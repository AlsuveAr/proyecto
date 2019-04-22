@extends('layouts.web')

@section('header')
	<div id="header" style="background-image: url('{{ asset('img/header.jpg')  }}');">
        <div class="container">
            <div class="header">
                <h1>Bienvenido</h1>
                <h3>Nuestra especialidad es ayudarte</h3>
                <br>
                <a href="#" class="btn btn-success">Saber mas</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="">
    	<div class="card" id="card">
    		<div class="card-body">
    			
    			<div class="row lustify-content-center mt-5 mb-5">
					<div class="col-6 offset-3 mt-3 text-center">
						<h3>Hey estoy aqui</h3>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

				<!--Sesion de iconos-->
				<div class="row mt-5 mb-5 mr-2 ml-2">
					<div class="col ml-2 mr-2 ">
						<div class="row justify-content-center">
							<div class="text-info">
								<i class="fas fa-comment fa-5x"></i>
							</div>
						</div>
						<br>
						<div class="row justify-content-center">
							<h4 class="text-center">Titulo</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud</p>
						</div>
					</div>
					<div class="col ml-2 mr-2">
						<div class="row justify-content-center">
							<div class="text-success">
								<i class="fas fa-lock fa-5x"></i>
							</div>
						</div>
						<br>
						<div class="row justify-content-center">
							<h4 class="text-center">Titulo</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud</p>
						</div>	
					</div>
					<div class="col ml-2 mr-2">
						<div class="row justify-content-center">
							<div class="text-danger">
								<i class="fas fa-fingerprint fa-5x"></i>
							</div>
						</div>
						<br>
						<div class="row justify-content-center">
							<h4 class="text-center">Titulo</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud</p>
						</div>
					</div>
				</div>

				<!--Nuestro equipo-->
				<br>
				<div class="row justify-content-center mt-5 cont-3">
					<h3>Nuestro equipazo</h3>
				</div>
				
				<div class="row mt-5 mr-2 ml-2">
					<div class="col mr-3 ml-3 ">
						<div class="row justify-content-center">
							<img src="{{ asset('argon/img/theme/team-4-800x800.jpg') }}" class="rounded-circle" width="45%">
						</div>
						<br>
						<div class="text-center">
							<h5>La abuelita</h5>
							<span class="text-muted">Modelo</span>
						</div>
						<br>
						<div class="text-center">
							
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud</p>
							<div>
								<a href="" class="text-muted mr-2 ml-2">
									<i class="fab fa-instagram fa-2x"></i>
								</a>
								<a href="" class="text-muted mr-2 ml-2">
									<i class="fab fa-facebook fa-2x"></i>
								</a>
								<a href="" class="text-muted mr-2 ml-2">
									<i class="fab fa-twitter fa-2x"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col mr-3 ml-3">
						<div class="row justify-content-center">
							<img src="{{ asset('img/faces/avatar.jpg') }}" class="rounded-circle" width="45%">
						</div>
						<br>
						<div class="text-center">
							<h5>La abuelita</h5>
							<span class="text-muted">Modelo</span>
						</div>
						<br>
						<div class="text-center">
							
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud</p>
							<div>
								<a href="" class="text-muted mr-2 ml-2">
									<i class="fab fa-instagram fa-2x"></i>
								</a>
								<a href="" class="text-muted mr-2 ml-2">
									<i class="fab fa-facebook fa-2x"></i>
								</a>
								<a href="" class="text-muted mr-2 ml-2">
									<i class="fab fa-twitter fa-2x"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col mr-3 ml-3">
						<div class="row justify-content-center">
							<img src="{{ asset('argon/img/theme/team-1-800x800.jpg') }}" class="rounded-circle" width="45%">
						</div>
						<br>
						<div class="text-center">
							<h5>La abuelita</h5>
							<span class="text-muted">Modelo</span>
						</div>
						<br>
						<div class="text-center">
							
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud</p>
							<div>
								<a href="" class="text-muted mr-2 ml-2">
									<i class="fab fa-instagram fa-2x"></i>
								</a>
								<a href="" class="text-muted mr-2 ml-2">
									<i class="fab fa-facebook fa-2x"></i>
								</a>
								<a href="" class="text-muted mr-2 ml-2">
									<i class="fab fa-twitter fa-2x"></i>
								</a>
							</div>
						</div>
					</div>
				</div>


    		</div>
    	</div>

    </div>

@endsection
