@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>{{$comic->title}}</h1>
        <div class="d-flex align-items-center">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <p class="border ms-2">{{$comic->description}}</p>
        </div>
    </div>
@endsection