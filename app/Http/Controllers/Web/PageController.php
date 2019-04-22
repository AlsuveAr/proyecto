<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Room;

class PageController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

    	return view('web.home', compact('room'));
    } 

    public function session() {
        //La vista debe ser de informacion de ayuda (libros recomendados,articulos etc)
        //Hacer otra vista para el chat
        
        $room = 1; //Obtener la sala de chat que le pertenece al cliente dicha sala tiene la relacion con el consejero

        return view('web.session', compact('room'));
    } 

    public function contactUs() {
        return view('web.contact-us');
    }

    public function faq() {
        return view('web.faq');
    }
    

}
