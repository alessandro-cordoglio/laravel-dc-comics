@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Comics</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Copertina</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Anno di vendita</th>
                <th scope="col">genere</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                  <td>
                    <img src="{{$comic->thumb}}" alt="{{$comic->thumb}}">
                  </td>
                  <td> {{$comic->title}} </td>
                  <td> {{$comic->price}} </td>
                  <td> {{$comic->series}} </td>
                  <td> {{$comic->sale_date}} </td>
                  <td> {{$comic->type}} </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
