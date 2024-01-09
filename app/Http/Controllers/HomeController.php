<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index()
    {
        // $comics = Comic::all();

        // estrae elementi dal db in ordine casuale
        $comics = Comic::inRandomOrder()->get();

        // estrae solo 5 elementi in ordine casuale
        // $comics = Comic::inRandomOrder()->limit(5)->get();

        return view('home', compact('comics'));
    }
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

}
