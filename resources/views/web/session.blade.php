@extends('layouts.web')

@section('content')
	<div>
		@if(Auth::check())
			<!--Componente completo chat + info-->
			<chat-c :room="{{ $room }}" :user="{{ Auth::user() }}"></chat-c>
		@endif
	</div>
@endsection