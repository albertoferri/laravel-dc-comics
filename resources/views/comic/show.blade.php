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
                        <div class="d-flex justify-content-between pt-3">
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning fw-bold">MODIFICA</a>

                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger fw-bold">ELIMINA</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il fumetto</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              Sei sicuro che vuoi eliminare il fumetto "{{$comic->title}}?"
            </div>


            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>

          </div>
        </div>
    </div>
@endsection