@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/addComment" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <h1>Add new comment</h1>
        </div>
        <div class="row">

            {{--            name--}}
            <div class="form-group row">
                <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>
                <input type="hidden" name="film" id="film" value="{{$film->id}}">
                <div class="col-md-6">
                    <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}" required autocomplete="comment" autofocus>

                    @error('comment')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <button class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
@endsection
