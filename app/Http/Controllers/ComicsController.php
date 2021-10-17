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

        // !istanza creata per poter fare l'if per il form per verificare se siamo nell'edit o nel create -->> vai all'icludel del form 
        $comic = new Comic;


        return view('comics.create', compact('comic'));
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
        // $comic = new Comic();


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
        // $comic->fill($data);


        //# utiliziamo il metodo slug dell'Str importato a riga 3 per la creazione dello slug
        // $comic->slug = Str::slug($data['title'], '-');

        //# proprietà del modello model per il salvatagio 
        // $comic->save();

        //# version created 
        $data['slug'] = Str::slug($data['title'], '-');

        $comic = Comic::create($data);

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
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        //# maella e fill come store
        //!--------!
        // #Up 3
        // #instanziamo direttamente su neklla function...???occhio??
        $data = $request->all();
        $data['slug'] = Str::slug($data['title'], '-');
        $comic->update($data);


        return redirect()->route('comics.show', $comic->id);
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
        $comic = Comic::findOrFail($id);
        $comic->delete();
        // # passiamo al redirect una varabile di sessione per l'allert di avvenuta cancellazione 
        return redirect()->route('comics.index')->with('success', $comic->title);
    }


    // ---------------------------------
    public function trash()
    {
        $comics = Comic::onlyTrashed()->get();

        return view('comics.trash', compact('comics'));
    }




    public function restore($id)
    {
        //! non possiaMO FARE IL CLASSICO FIND OR FAIL PERCHE NON CERCA GLI ID CANCELLATI O I SOFT DELITE
        // $comic = Comic::findOrFail($id);
        //! ma utiliziamo il suo medoto 
        $comic = Comic::withTrashed()->find($id);

        $comic->restore();
        return redirect()->route('comics.index')->with('success', $comic->title);
    }
}
