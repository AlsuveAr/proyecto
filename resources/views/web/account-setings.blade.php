@extends('layouts.web')

@section('content')
	<div class="container mt-5">
		<br>
		<h2>Configuración de Cuenta</h2>
		
		@include('web.account.edit-profile')

		@include('web.account.notification')
		
		@include('web.account.payment')
		
		@include('web.account.photo-profile')

		@include('web.account.info-personal')

		<br>
	
	</div>
@endsection