@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1> Modifica {{$comic->title}} </h1>
    </div>

    <form class="p-5" action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina(URL)</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}" style="width: 30rem">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" maxlength="100" value="{{$comic->title}}" style="width: 30rem" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" min="1" max="500.99" step=".01" value="{{$comic->price}}" style="width: 30rem" required>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" maxlength="100" value="{{$comic->series}}" style="width: 30rem" required>
    </div>
    <div class="mb-3">
        <label for="type">Tipologia</label>
        <select class="form-select" name="type" style="width: 10rem" value="{{$comic->type}}" aria-label="Default select example" required>
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Anno di vendita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" style="width: 10rem" required>
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Lascia una piccola descrizione" id="description" name="description" style="width: 30rem">{{$comic->description}}"</textarea>
        <label for="description">Piccola descrizione</label>
    </div>

    <button type="submit" class="btn btn-success mt-4">Submit</button>
    <button type="reset" class="btn btn-danger mt-4">Reset</button>

    </form>
@endsection