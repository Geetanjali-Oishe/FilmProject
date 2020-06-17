<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Film;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CommentController extends Controller
{
    //to authenticate user
    public function __construct()
    {
        $this->middleware('auth');
    }

    //create a new comment about a film
    public function create(\App\Film $film) {
        return view('comments.create', compact('film'));
    }

    //store a comment about a film
    public function store() {
        $data = request()->validate([
           'comment' => 'required',
            'film' => ""
        ]);

      $userId = auth()->user()->id;
      $filmId = $data['film'];

        Comment::create(([
            'comment' => $data['comment'],
            'film_id' => $filmId,
            'user_id' => $userId,
        ]
        ))->save();

        return redirect("films/{$filmId}");
    }

    //show a specific film information
//    public function show (\App\Film $film) {
//        $comments = Comment::where('film_id', $film->id)->get();
//        foreach ($comments as $comment) {
//            $comment->user = User::where('id', $comment->user_id)->get();
//        }
//        $user = auth()->user();
//        return view('films.show', compact('film', 'comments', 'user'));
//    }
}
