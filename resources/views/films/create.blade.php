@extends('layouts.app')
<style>
    .check {
        margin-right: 4px;
    }

    .checkbox-inline {
        margin-right: 4px;
    }
</style>
@section('content')
<div class="container">

    <form action="/addFilm" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row pb-4">
            <span class="col-3"></span>
            <h4> Add new film</h4>
        </div>
{{--        <div class="row">--}}

            {{--            name--}}
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-left">{{ __('Name') }}</label>

                <div class="col-md-4">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            {{--            description--}}
            <div class="form-group row">
                <label for="description" class="col-md-2 col-form-label text-md-left">{{ __('Description') }}</label>

                <div class="col-md-4">
                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                    </textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            {{--            release date --}}
            <div class="form-group row">
                <label for="release" class="col-md-2 col-form-label text-md-left">{{ __('Release Date') }}</label>

                <div class="col-md-4">
                    <input id="release" type="date" class="form-control @error('release') is-invalid @enderror" name="release" value="{{ old('release') }}" required autocomplete="release" autofocus>

                    @error('release')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            {{--            rating --}}
            <div class="form-group row">
                <label for="rating" class="col-md-2 col-form-label text-md-left">{{ __('Rating') }}</label>

                <div class="col-md-4">
                    <input id="rating" type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus>

                    @error('rating')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            {{--            ticket price --}}
            <div class="form-group row">
                <label for="ticket" class="col-md-2 col-form-label text-md-left">{{ __('Ticket Price (In BDT)') }}</label>

                <div class="col-md-4">
                    <input id="ticket" type="text" class="form-control @error('ticket') is-invalid @enderror" name="ticket" value="{{ old('ticket') }}" required autocomplete="ticket" autofocus>

                    @error('ticket')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>


            {{--            country --}}
            <div class="form-group row">
                <label for="country" class="col-md-2 col-form-label text-md-left">{{ __('Country') }}</label>

                <div class="col-md-4">
                    <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                    @error('country')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            {{--            genre --}}
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-left">{{ __('Genre') }}</label>

                <div class="col-md-4">
{{--                    <input id="genre" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus>--}}

{{--                    @error('genre')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                    @enderror--}}

                    <label class="checkbox-inline"><input type="checkbox" class="check" id="action" name="genre[]" value="action">Action</label>
                    <label class="checkbox-inline"><input type="checkbox" class="check" id="thriller" name="genre[]" value="thriller">Thriller</label>
                    <label class="checkbox-inline"><input type="checkbox" class="check" id="horror" name="genre[]" value="horror">Horror</label>
                    <label class="checkbox-inline"><input type="checkbox" class="check" id="comedy" name="genre[]" value="comedy">Comedy</label>
                    <label class="checkbox-inline"><input type="checkbox" class="check" id="drama" name="genre[]" value="drama">Drama</label>
                    <label class="checkbox-inline"><input type="checkbox" class="check" id="scifi" name="genre[]" value="scifi">Sci-Fi</label>
                    <label class="checkbox-inline"><input type="checkbox" class="check" id="adventure" name="genre[]" value="adventure">Adventure</label>
                    <label class="checkbox-inline"><input type="checkbox" class="check" id="crime" name="genre[]" value="crime">Crime</label>
                    <label class="checkbox-inline"><input type="checkbox" class="check" id="romantic" name="genre[]" value="romantic">Romantic</label>
                </div>



            </div>

            {{--            photo --}}
            <div class="row form-group ">
                <label for="photo" class="col-md-2 col-form-label text-md-left">{{ __('Upload Photo') }}</label>

                <div class="col-md-6">
                    <input id="photo" class="form-control-file" type="file" id="photo" required name="photo">
                    @error('photo')
{{--                    <span class="invalid-feedback" role="alert">--}}
                                        <strong>{{ $message }}</strong>
{{--                                    </span>--}}
                    @enderror
                </div>

            </div>

            <div class="row">
                <span class="col-3"></span>
                <button class="btn btn-success ">Add New Film</button>
            </div>


{{--        </div>--}}
    </form>

</div>
@endsection
