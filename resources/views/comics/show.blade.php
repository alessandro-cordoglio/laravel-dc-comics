@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>{{$comic->title}}</h1>
        <div>
            <a href="{{route('comics.index')}}">Torna alla lista dei fumetti</a>
        </div>
        <div class="d-flex align-items-center pt-5">
            <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <p class="border ms-2 fs-4 p-3">{{$comic->description}}</p>
        </div>
    </div>
@endsection