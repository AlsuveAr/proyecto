@extends('layouts.web')

@section('content')
	<div class="container mt-5">
		<br>
		
		<h2>Contactanos</h2>
		<p>Tienes una pregunta, preocupación, idea, o problema? 
			Echa un vistazo a nuestras <a href="{{ route('web.faq') }}">preguntas frecuentes</a> para obtener una respuesta rapida. Si aún necesita ayuda, complete el formulario y estaremos encantados de ayudarte</p>
		<div class="row">
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<form>
							@csrf
							<div class="form-group">
								<label for="input-name">Nombre</label>
								<input type="text" name="name" id="input-name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
							</div>
							<div class="form-group">
								<label for="input-lastname">Apellido</label>
								<input type="text" name="lastname" id="input-lastname" class="form-control">
							</div>
							<div class="form-group">
								<label for="input-email">Correo electrónico</label>
								<input type="text" name="email" id="input-email" class="form-control" value="{{ old('email', auth()->user()->email) }}">
							</div>
							<div class="form-group">
								<label for="input-message">Mensaje</label>
								<textarea class="form-control" id="input-message" name="message" rows="3"></textarea>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-success">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
					<div class="card-body" id="info-empresa">
						<h6>Nombre de la empresa</h6>
						<p>Ubicacion y calle fisica o algo por el estilo</p>
						<br>
						<p>soporteoalgo@dominio.com</p>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
@endsection