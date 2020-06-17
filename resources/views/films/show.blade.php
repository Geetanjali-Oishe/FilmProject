@extends('layouts.app')

@section('content')
<div class="container">

    <div class="col-md-12 pb-4 " style="display: flex">
        <div class="col-md-6">
            <a href="/films/{{$film->id}}">
                <img  src="/storage/{{ $film->photo  }}" class="w-100">
            </a>
        </div>


        <div class="col-md-6 pb-3">

            @if($user != null)
{{--            <a role="button" class="btn btn-info mb-4" href="/comment/create/{{$film->id}}"> Add a comment</a>--}}
                <form action="/addComment" enctype="multipart/form-data" method="post">
                    @csrf
                <div class="form-group row">
                    <label for="comment" class="col-md-2 col-form-label text-md-right">{{ __('Comment') }}</label>
                    <input type="hidden" name="film" id="film" value="{{$film->id}}">
                    <div class="col-md-5">
                        <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}" required autocomplete="comment" autofocus>

                        @error('comment')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary col-md-3">Add a Comment</button>
                </div>
                </form>

            @endif

            @if(sizeof($comments) > 0)
            <h3>Comments: </h3>
            @endif

        @foreach($comments as $comment)
            <div class="col-md-12" style="background-color: lightblue; margin-bottom: 5px; border-radius: 2px">
                <b>{{ $comment->user[0]->username }} </b> wrote on {{$comment->created_at}}:
                <br>
                {{$comment->comment}}
            </div>
        @endforeach
        </div>
    </div>

    <div class="row"><h5><b>Name:</b> {{$film->name}}</h5></div>
    <div class="row"><h5><b>Description:</b> {{$film->description}}</h5></div>
    <div class="row"><h5><b>Release Date:</b> {{$film->release}}</h5></div>
    <div class="row"><h5><b>Rating:</b> {{$film->rating}}</h5></div>
    <div class="row"><h5><b>Ticket Price:</b> {{$film->ticket}}</h5></div>
    <div class="row"><h5><b>Country:</b> {{$film->country}}</h5></div>
    <div class="row pb-5"><h5><b>Genre:</b> {{$film->genre}}</h5></div>
{{--<img src="/storage/{{ $film->photo }}">--}}













</div>
@endsection
