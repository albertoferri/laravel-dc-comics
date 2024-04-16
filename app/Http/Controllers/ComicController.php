<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
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
    public function store(StoreComicRequest $request)
    {

        // per far si che vengano validati prima di essere inseriti nel database dobbiamo scrivere questa stringa
        $request->validated();

        // creiamo un nuovo fumetto
        $newComic = new Comic();

        // $newComic->title = $request->title;
        // $newComic->description = $request->description;
        // $newComic->thumb = $request->thumb;
        // $newComic->price = $request->price;
        // $newComic->series = $request->series;
        // $newComic->sale_date = $request->sale_date;
        // $newComic->type = $request->type;
        // $newComic->artists = $request->artists;
        // $newComic->writers = $request->writers;

        // dopo aver inserito i fillable nel model possiamo utilizzare questo
        $newComic->fill($request->all());

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
    public function update(StoreComicRequest $request, Comic $comic)
    {

        // per far si che vengano validati prima di essere modificati nel database dobbiamo scrivere questa stringa
        $request->validated();

        // codice per modificare il record (elemento)
        // $comic->title = $request->title;
        // $comic->description = $request->description;
        // $comic->thumb = $request->thumb;
        // $comic->price = $request->price;
        // $comic->series = $request->series;
        // $comic->sale_date = $request->sale_date;
        // $comic->type = $request->type;
        // $comic->artists = $request->artists;
        // $comic->writers = $request->writers;

        $comic->update($request->all());
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


    
    // SPOSTATO IL VALIDATE DENTRO UN FORM A PARTE
}
