<?php

namespace App\Http\Controllers;

use App\Models\Comic;
// #import per l'utilizzo del metodo str(in questo caso per la creazione dello slug)
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $comics = Comic::all();
        $comics = Comic::orderBy('title', 'asc')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //# prendiamo tutti i dati provenienti dal form generato da create
        $data = $request->all();
        //# inizializzaimo una nuova instanza Comic(model comic) da inserire nel db
        $comic = new Comic();


        //# riasegnamo valori del modello con i dati ricevuto (data) dal forum per l'inserimento della tupla nel db
        //? manella
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        //? fill
        // fa in automatico il manella  prendendo cosa deve inserire dal campo fillable inserito nel model :-)
        // fill non inserisce lo slug perche npn viene dal form e lo inseriamo noi a mano 
        $comic->fill($data);


        //# utiliziamo il metodo slug dell'Str importato a riga 3 per la creazione dello slug
        $comic->slug = Str::slug($data['title'], '-');

        //# proprietà del modello model per il salvatagio 
        // dd($comic);
        $comic->save();

        //# torniamo nel dettaglio del comic appena creato
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // //
        // $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
