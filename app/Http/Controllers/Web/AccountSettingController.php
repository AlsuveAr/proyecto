<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\Web\AccountProfileRequest;
use App\Http\Requests\Web\AccountPasswordRequest;

class AccountSettingController extends Controller
{
    /*
     * Configuracion de cuenta
     */
    public function showAccountSettings() {
        return view('web.account-setings');
    }

    public function updateNameOrEmail(AccountProfileRequest $request) {
        
        auth()->user()->update($request->all());

        return back()->withStatus(__('Datos actualizados correctamente.'));
    }

    public function updatePassword(AccountPasswordRequest $request) {
    	auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Contraseña actualizada correctamente.'));
    }
}
