<?php

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Ruta para chat publico
Route::post('public-messages', function (Illuminate\Http\Request $request) {
	App\Events\PublicMessage::dispatch($request->all());
	//App\Events\PrivateChat::dispatch($request->all());
});

//Ruta para chat privado-> funciona sin middleware
Route::post('private-messages', function (Illuminate\Http\Request $request) {
	App\Events\PrivateMessage::dispatch($request->all());
	//App\Events\PrivateChat::dispatch($request->all());
});

//Componente tentativo
/*
 * Falta poner seguridad a las rutas
 */
Route::get('messages', function() { 
	//dd(Auth::user()->id);
	return App\Message::with('user')->get();
});
Route::post('messages', function(Illuminate\Http\Request $request) {
	event(new App\Events\PrivateMessage($request->all()));
});



