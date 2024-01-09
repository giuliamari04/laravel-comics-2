@extends('layouts.app')

@section('title', 'edit fumetto'.$comic->title)

@section('content')
    <main>
     <section>
        <div class="container w-50 py-5">
             <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Inserisci il titolo:</label>
            <input type="text" id="title" name="title" value="{{old('title', $comic->title)}}" placeholder="Titolo..." class="form-control my-2 w-50" required>
            <label for="description">Inserisci una descrizione:</label>
            <input type="text" id="description" name="description" value="{{old('description',$comic->description)}}" placeholder="Descrizione..." class="form-control my-2 pb-5" required>
            <label for="price">Inserisci il prezzo di vendita:</label>
            <input type="text" id="price" name="price" value="{{old('price',$comic->price)}}" placeholder="Prezzo..." class="form-control w-25 my-2" required>
            <label for="type">A che categoria appartiene?</label>
            <input type="text" id="type" name="type" value="{{old('type',$comic->type)}}" placeholder="inserisci una categoria" class="form-control my-2 w-50" required>

            <button type="submit" class="btn btn-primary my-4">invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>

        </form>
        </div>

     </section>

    </main>

@endsection
