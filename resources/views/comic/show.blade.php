@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-6">
                <h1 class="mb-4">{{$comic->title}}</h1>
                <div class="card">
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
        </div>
    </div>
@endsection