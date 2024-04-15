@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-10">
                <nav class="d-flex justify-content-between align-items-center pb-3">
                    <h1>{{$comic->title}}</h1>
                
                    <a href="{{route('comics.index')}}" class="btn btn-primary h-50 fw-bold">HOME</a>
                </nav>
                <div class="card mb-3 border-3 border-primary">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="Card image cap">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body h-100 d-flex flex-column justify-content-between">
                                <section>
                                    <p class="card-text"><strong>Trama:</strong><br>{{$comic->description}}</p>
                                    <ul class="list-unstyled">
                                        <li><strong>Prezzo:</strong> {{$comic->price}}</li>
                                        <li><strong>Serie:</strong> {{$comic->series}}</li>
                                        <li><strong>Data di uscita:</strong> {{$comic->sale_date}}</li>
                                        <li><strong>Tipo:</strong> {{$comic->type}}</li>
                                        <li><strong>Artists:</strong> {{$comic->artists}}</li>
                                        <li><strong>Writers:</strong> {{$comic->writers}}</li>
                                    </ul>
                                </section>
                                <div class="d-flex justify-content-between pt-3">
                                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning fw-bold">MODIFICA</a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger fw-bold">ELIMINA</button>
                                </div>
                            </div>
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
              Sei sicuro che vuoi eliminare il fumetto "{{$comic->title}}"?
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