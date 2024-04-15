@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <nav class="d-flex justify-content-between align-items-center pb-5">
            <h1 class="display-1 text-center fw-bold ">COMICS</h1>
        
            <a href="{{route('comics.create')}}" class="btn btn-success h-50 fw-bold">AGGIUNGI UN FUMETTO</a>
        </nav>

        <div class="row row-gap-4">
            @foreach($comics as $comic)
                <div class="col-sm-4">
                    <div class="card h-100 hover-comic border-3">
                        <a href="{{route('comics.show', $comic->id)}}">
                            <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
                        </a>                        
                        <div class="card-body h-100 d-flex flex-column justify-content-between">
                            <section>
                                <ul class="list-unstyled">
                                    <li><strong>Prezzo:</strong> {{$comic->price}}</li>
                                    <li><strong>Serie:</strong> {{$comic->series}}</li>
                                    <li><strong>Data di uscita:</strong> {{$comic->sale_date}}</li>
                                    <li><strong>Tipo:</strong> {{$comic->type}}</li>
                                    <li><strong>Artists:</strong> {{$comic->artists}}</li>
                                    <li><strong>Writers:</strong> {{$comic->writers}}</li>
                                </ul>
                            </section>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-success fw-bold text-uppercase">maggiori informazioni</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
@endsection