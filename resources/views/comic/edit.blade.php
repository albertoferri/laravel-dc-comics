@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1 class="text-center fw-bold">Modifica il tuo fumetto</h1>

    {{-- @dump($comic) --}}

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf

        {{-- il file edit prevede solo il metodo PUT e per passarlo devo scrivere questo --}}
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" rows="4" name="description">{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" id="artists" name="artists" value="{{$comic->artists}}">
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers}}">
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            <h5>ERRORI:</h5>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <button type="submit" class="btn btn-warning fw-bold">Salva</button>

    </form>
</div>
    
@endsection