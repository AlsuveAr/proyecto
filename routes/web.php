<?php
//use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'Web\RedirectController@index');
Route::get('admin', function() {
	return view('admin.index');
});
/*
 * Vistas de Prueba Chats
 */
Route::get('chat', function () {
    return view('chat');
});
//Chat privado
Route::get('room/{room}', function (App\Room $room) {
	return view('room', compact('room'));
});
/*
 * Fin Vistas de Prueba Chats
 */



Auth::routes();

Route::get('/home', 'Web\RedirectController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	/*
	 * Web
	 */
	Route::get('inicio', ['as' => 'web.home', 'uses' => 'Web\PageController@index']);
	//componente principal
	Route::get('session', ['as' => 'web.session', 'uses' => 'Web\PageController@session']);
	Route::post('messages', function() { 
		//Guardar el nuevo mensaje 
		$user = Auth::user();
		$user->messages()->create([
			'message' => request()->get('message')
		]);
		//El evento es disparado desde la ruta API
		return ['status' => 'OK'];
	});

	//vistas
	Route::get('configuracion-de-cuenta', ['as' => 'web.account', 'uses' => 'Web\AccountSettingController@showAccountSettings']);
	Route::put('configuracion-de-cuenta', ['as' => 'web.account.update', 'uses' => 'Web\AccountSettingController@updateNameOrEmail']);
	Route::put('configuracion-de-cuenta/password', ['as' => 'web.account.password', 'uses' => 'Web\AccountSettingController@updatePassword']);
	Route::get('contactanos', ['as' => 'web.contact-us', 'uses' => 'Web\PageController@contactUs']);
	Route::get('preguntas-frequentes', ['as' => 'web.faq', 'uses' => 'Web\PageController@faq']);


	/*
	 * Consejero
	 */
	Route::get('consejero', ['as' => 'counselor.home', 'uses' => 'HomeController@councelor']);

	/*
	 * Admin
	 */
	Route::get('dashboard', ['as' => 'admin.home', 'uses' => 'Admin\PageController@index']);
	Route::resource('user', 'Admin\UserController', ['except' => ['']]);
	Route::get('clientes', ['as' => 'admin.user.client', 'uses' => 'Admin\UserController@client']);
	Route::get('consejeros', ['as' => 'admin.user.counselor', 'uses' => 'Admin\UserController@counselor']);
});



