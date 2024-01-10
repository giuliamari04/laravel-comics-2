@extends('layouts.app')

@section('title', 'creazione fumetto')

@section('content')
    <main>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
     <section>
        <div class="container w-50 py-5">
             <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <label for="title">Inserisci il titolo:</label>
            <input type="text" id="title" name="title" placeholder="Titolo..." class="form-control my-2 w-50 @error('title') is-invalid @enderror" required>

            <label for="thumb">image</label>
            <input type="text" id="thumb" name="thumb" placeholder="inserisci un'immagine" class="form-control my-2">

            <label for="description">Inserisci una descrizione:</label>
            <input type="text" id="description" name="description" placeholder="Descrizione..." class="form-control my-2 pb-5" required>

            <label for="price">Inserisci il prezzo di vendita:</label>
            <input type="text" id="price" name="price" placeholder="Prezzo..." class="form-control w-25 my-2" required>

            <label for="type">A che categoria appartiene?</label>
            <input type="text" id="type" name="type" placeholder="inserisci una categoria" class="form-control my-2 w-50" required>

            <label for="sale_date">sale date</label>
            <input type="text" id="sale_date" name="sale_date" placeholder="inserisci data di uscita" class="form-control my-2" required>


            <button type="submit" class="btn btn-primary my-4">invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>

        </form>
        </div>

     </section>

    </main>

@endsection
