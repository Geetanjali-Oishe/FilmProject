<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NewFilmController extends Controller
{
//    to authenticate user
    public function __construct()
    {
        $this->middleware('auth');
    }

//    to create a new film
    public function create() {
        return view('films.create');
    }

//    to store a new film data
    public function store() {
        $data = request()->validate([
           'name' => 'required',
            'description' => 'required',
            'release' => 'required',
            'rating' => ['required', 'numeric'],
            'ticket' => ['required', 'numeric'],
            'country' => 'required',
            'photo' => ['required', 'image'],
            'genre' => ''
        ]);

        $genre = '';
        for ($x = 0; $x<sizeof($data['genre']); $x++) {
            $genre .= $data['genre'][$x];
            if($x < sizeof($data['genre'])-1) {
                $genre .= ' | ';
            }

        }
//        dd($genre );
        $imagePath = request('photo')->store('uploads', 'public');

        //resize image
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        //        auth()->user()->films()->create($data);

        auth()->user()->films()->create([
                'name' => $data['name'],
                'description' => $data['description'],
                'release' => $data['release'],
                'rating' => $data['rating'],
                'ticket' => $data['ticket'],
                'country' => $data['country'],
                'genre' => $genre,
                'photo' => $imagePath
                ]
        );

        return redirect('/films');
    }


//    public function show (\App\Film $film) {
//        $comments = Comment::where('film_id', $film->id)->get();
//        foreach ($comments as $comment) {
//            $comment->user = User::where('id', $comment->user_id)->get();
//        }
//        $user = auth()->user();
//        return view('films.show', compact('film', 'comments', 'user'));
//    }
}
