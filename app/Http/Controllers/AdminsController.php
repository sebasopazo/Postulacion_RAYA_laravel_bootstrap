<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    function index()
    {
     return view('/inicioSesion');
    }
    function create()
    {
     return view('/inicioSesion');
    }

    public function validar() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);

        } else {


                return redirect()->to('/panelContactos');

        }
    }

    function logout()
    {
     Auth::logout();
     return redirect('/');
    }
}

?>
