@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Aggiungi un fumetto</h1>
    </div>

    <form class="p-5" action="{{route('comics.store')}}" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @csrf
    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina(URL)</label>
        <input type="text" class="form-control" id="thumb" name="thumb" style="width: 30rem" value="{{old('thumb')}}">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" maxlength="100" style="width: 30rem" value="{{old('title')}}" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" min="1" max="500.99" step=".01" value="{{old('price')}}" style="width: 30rem" required>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" maxlength="100" style="width: 30rem" value="{{old('series')}}" required>
    </div>
    <div class="mb-3">
        <label for="type">Tipologia</label>
        <select class="form-select" name="type" style="width: 10rem" aria-label="Default select example" required>
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Anno di vendita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" style="width: 10rem" value="{{old('sale_date')}}" required>
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Lascia una piccola descrizione" id="description" name="description" style="width: 30rem">{{old('title')}}</textarea>
        <label for="description">Piccola descrizione</label>
    </div>

    <button type="submit" class="btn btn-success mt-4">Submit</button>
    <button type="reset" class="btn btn-danger mt-4">Reset</button>

    </form>
@endsection