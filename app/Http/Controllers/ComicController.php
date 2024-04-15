<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::All();
        // dd($comics);
        return view("comic.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comic.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // per far si che vengano validati prima di essere inseriti nel database dobbiamo scrivere questa stringa
        $this->validation($request->all());

        // creiamo un nuovo fumetto
        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        // spostiamo l'utente nella index
        return redirect()->route("comics.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view("comic.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view("comic.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        // per far si che vengano validati prima di essere modificati nel database dobbiamo scrivere questa stringa
        $this->validation($request->all());

        // codice per modificare il record (elemento)
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;
        $comic->save();

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }


    
    // creo una funzione privata per i controlli di validazione e la comunicazione del messaggio di errore
    // VA RICHIAMATO NELLO STORE, PRIMA DI FARE TUTTO
    private function validation($data) {
    
        $validator = Validator::make($data, [
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required',
            'writers' => 'required'
        ], [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => "Il titolo deve avere massimo :max caratteri",
            'price.required' => "Il prezzo deve essere inserito",
            'price.max' => "Inserisci un prezzo di massimo :max caratteri",
            'series.required' => "La serie deve essere inserita",
            'series.max' => "La serie deve avere massimo :max caratteri",
            'sale_date.required' => "La data di vendita deve essere inserita",
            'sale_date.date' => "Inserisci una data valida",
            'type.required' => 'Il tipo deve essere inserito',
            'type.max' => "Il tipo deve avere massimo :max caratteri",
            'artists.required' => "Gli artisti devono essere inseriti",
            'writers.required' => "Gli scrittori devono essere inseriti",
        ])->validate();
    }
}
