<div class="card mt-3">
	<div class="card-body">
		<h4>Informacion de inicio</h4>
		<p>{{ Auth::user()->email }}</p>

		<!--Nombre o Correo-->
		<a href="#collapseEmail" 
			class="" 
			data-toggle="collapse" 
			role="button" 
			aria-expanded="false"
			aria-controls="collapseEmail">
			Cambiar correo nombre o electrónico</a><br>
		<div class="collapse container" id="collapseEmail" >
			<form method="post" action="{{ route('web.account.update') }}" autocomplete="off">
				@csrf
				@method('put')
				<!--<h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>-->
				@if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

				<div class="form-group {{ $errors->has('name') ? ' has-danger' : '' }}">
					<label class="form-control-label" for="input-name">Nombre</label>
					<input type="text" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" value="{{ old('name', auth()->user()->name) }}" required autofocus>
				</div>

				<div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">
					<label class="form-control-label form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" for="input-email">Email</label>
					<input type="email" class="form-control" name="email" id="input-email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>
				</div>
				<div class="">
					<button type="submit" class="btn btn-success mb-4">Guardar cambios</button>
				</div>
			</form>
		</div>
		
		<!--Contraseña-->
		<a href="#collapsePassword"
			class="" 
			data-toggle="collapse" 
			role="button" 
			aria-expanded="false"
			aria-controls="collapsePassword">Cambiar contraseña</a>
		<div class="collapse container mt-3" id="collapsePassword" >
			<form method="post" action="{{ route('web.account.password') }}" autocomplete="off">
				@csrf
				@method('put')

				@if (session('password_status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('password_status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="form-group {{ $errors->has('old_password') ? ' has-danger' : '' }}">
                	<label class="form-control-label" for="input-current-password">{{ __('Contraseña actual') }}</label>
            		<input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña actual') }}" value="" required>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-password">{{ __('Nueva Contraseña') }}</label>
                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Nueva Contraseña') }}" value="" required>
                    
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirmar Contraseña') }}</label>
                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirmar Contraseña') }}" value="" required>
                </div>

                <div class="">
                    <button type="submit" class="btn btn-success ">{{ __('Cambiar contraseña') }}</button>
                </div>
			</form>
		</div>
		
		
	</div>
</div>