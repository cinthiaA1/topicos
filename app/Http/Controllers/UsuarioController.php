<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuario()
    {
        $users = [
            'elizer',
            'cinthia'
        ];
        return view('users', [ 'users' => $users]);
    }
}
