@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1>COMICS</h1>


        @foreach ($comics as $comic)

        <img src="{{$comic->thumb}}" alt="">
        {{$comic->title}}
        {{$comic->description}}
            
        @endforeach
        

    </div>
@endsection