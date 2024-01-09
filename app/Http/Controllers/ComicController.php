<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View;
     */
    public function create()
    {
        // inserire nuovo fumetto in db
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        // prendo dati del from dalla request
        $formData = $request->all();
        $request->validate([
            'title'=>'required|min:5|max:100',
            'price'=>'required',
        ]);
        //creo nuovo prodotto
        $newComic = new Comic();
         $newComic->title = $formData['title'];
         $newComic->description = $formData['description'];
         $newComic->price = $formData['price'];
        $newComic->type = $formData['type'];
        $newComic->sale_date = '2020-07-01';
         $newComic->series = 'a piacere';

       //assegno dati del form al nuovo prodotto
        // $newComic->fill($formData);
         $newComic->save();

        //$newComic = Comic::create($formData);
        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View;
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->price = $formData['price'];
        $comic->type = $formData['type'];
        $comic->sale_date = '2020-07-01';
        $comic->series = 'a piacere';
        $comic->update();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message',"il prodotto $comic->title è stato cancellato");

    }
}
