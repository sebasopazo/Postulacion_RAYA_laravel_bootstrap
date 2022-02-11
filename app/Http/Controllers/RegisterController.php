<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admins;

class RegisterController extends Controller
{
    public function create(){
        return view('/register');
    }
    public function store() {

        $this->validate(request(), [
           
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $admins = Admins::create(request(['email', 'password']));

        auth()->login($admins);
        return redirect()->to('/');
    }
}
