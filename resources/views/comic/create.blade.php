@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Aggiungi un fumetto</h1>

    {{-- nel form scriviamo il nome della rotta come action --}}
    {{-- indichiamo anche il metodo POST per la richiesta --}}
    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" id="artists" name="artists">
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" id="writers" name="writers">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>

@endsection