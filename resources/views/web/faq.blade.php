@extends('layouts.web')

@section('content')
	<div class="container mt-5">
		<br>
		<h2>Preguntas frecuentes</h2>

		<div class="accordion" id="acordionFAQ">
			<a href="#collapseEmail" 
				class="" 
				data-toggle="collapse" 
				role="button" 
				aria-expanded="false"
				aria-controls="collapseEmail">
				<i class="fas fa-angle-right"></i> Que es la Pagina?
			</a><br>
			<div class="collapse container" 
				id="collapseEmail" data-parent="#acordionFAQ">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<a href="#collapsePassword"
				class="" 
				data-toggle="collapse" 
				role="button" 
				aria-expanded="false"
				aria-controls="collapsePassword">
				<i class="fas fa-angle-right"></i> Como realizo mis pagos?
			</a><br>
			<div class="collapse container mt-3" 
				id="collapsePassword" data-parent="#acordionFAQ">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<a href="#collapseAyudador"
				class="" 
				data-toggle="collapse" 
				role="button" 
				aria-expanded="false"
				aria-controls="collapsePassword">
				<i class="fas fa-angle-right"></i> Puedo cambiar al Asesor?
			</a><br>
			<div class="collapse container mt-3" 
				id="collapseAyudador" data-parent="#acordionFAQ">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<a href="#collapseAyudador"
				class="" 
				data-toggle="collapse" 
				role="button" 
				aria-expanded="false"
				aria-controls="collapsePassword">
				<i class="fas fa-angle-right"></i> Donde denuncio por abuso?
			</a><br>
			<div class="collapse container mt-3" 
				id="collapseAyudador" data-parent="#acordionFAQ">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>	
@endsection