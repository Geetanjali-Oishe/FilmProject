@extends('layouts.app')

@section('content')
<div class="container">
{{--    <div class="row">--}}

{{--            <li>{{ Auth::user()->username  }}</li>--}}
{{--            @foreach(Auth::user()->films as $film )--}}
    @if($user != null)
    <div>
        <a href="/films/create" style="float: right" role="button" class="btn btn-primary"> Add new film</a>
    </div>
    @endif
            <div class="col-md-9 col-md-offset-3">

                @if(sizeof($films)==0)
                    <h4>No films listed yet!</h4>
                @endif

            @foreach($films as $film)
                <div class="col-md-12 pb-4 " style="display: flex">
                    <div class="col-md-4">
                        <a href="/films/{{$film->id}}">
                            <img  src="/storage/{{ $film->photo  }}" class="w-100">
                        </a>
                    </div>

                    <div class="col-md-8">
                        <span>
                            <h4>{{$film->name}} ({{$film->release}})</h4>
                        </span>
                        <span>
                            <h5>Rating: {{$film->rating}}/5 | Country: {{$film->country}}</h5>
                        </span>
                        <span>
                            <h5>Genre: {{$film->genre}}</h5>
                        </span>
                    </div>
                </div>
            @endforeach
            </div>
{{--    </div>--}}

    <div class="pagination" style="float: right">
        {{ $films->render() }}
{{--         {{ $items->links() }}--}}
    </div>
</div>
@endsection
