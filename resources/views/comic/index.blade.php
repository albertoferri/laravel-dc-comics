@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1 class="text-center display-1 fw-bold mb-5">COMICS</h1>

        <div class="row row-gap-4">
            @foreach($comics as $comic)
                <div class="col-sm-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <p class="card-text">{{$comic->description}}</p>
                            <ul>
                                <li>Price: {{$comic->price}}</li>
                                <li>Series: {{$comic->series}}</li>
                                <li>Data di uscita: {{$comic->sale_date}}</li>
                                <li>Type: {{$comic->type}}</li>
                                <li>Artists: {{$comic->artists}}</li>
                                <li>Writers: {{$comic->writers}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
@endsection