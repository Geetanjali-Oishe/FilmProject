<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Film;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllViewController extends Controller
{
//    to view all films
    public function index()
    {
        $user = auth()->user();
        $films = \App\Film::paginate(3);
        return view('home',compact('films', 'user'));
    }

//    to view a specific film
    public function show (\App\Film $film) {
        $comments = Comment::where('film_id', $film->id)->get();
        foreach ($comments as $comment) {
            $comment->user = User::where('id', $comment->user_id)->get();
        }
        $user = auth()->user();
        return view('films.show', compact('film', 'comments', 'user'));
    }

}
