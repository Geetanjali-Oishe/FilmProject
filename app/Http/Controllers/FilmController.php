<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($user)
    {
        $user = User::find($user);
//        $films = \App\Film::All();
        $films = \App\Film::paginate(3);

        return view('home', [
            'user' => $user,
            'films' => $films
        ]);
    }
}
