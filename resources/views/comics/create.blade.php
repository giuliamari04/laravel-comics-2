@extends('layouts.app')

@section('title', 'creazione fumetto')

@section('content')
    <main>
     <section>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <input type="text" id="title" name="title" placeholder="inserisci un titolo" class="form-control">
            <input type="text" id="description" name="description" placeholder="inserisci una description" class="form-control">
            <input type="text" id="price" name="price" placeholder="inserisci un price" class="form-control">
            <input type="text" id="type" name="type" placeholder="inserisci un type" class="form-control">

            <button type="submit">invia</button>

        </form>
     </section>

    </main>

@endsection
