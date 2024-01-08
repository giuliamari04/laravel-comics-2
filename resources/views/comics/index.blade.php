@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main id="card-content">
    <section class="container py-5" >
        <h1 class="text-light py-3">List Comics</h1>
        <div class="row gy-4">
          @foreach ($comics as $key => $comic)
            <div class="col-12 col-md-4 col-lg-2">
                <div class="card bg-trasparent text-light border-1 border-light h-100">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="card-img-top">
                    <div class="card-body d-flex flex-column justify-content-between ">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        <p class="card-text">{!! substr($comic['description'], 0, 100) . '...' !!}</p>
                        <a href="{{route('comics.show', $key)}}" class="btn btn-primary">Vedi dettaglio</a>
                    </div>
                </div>
            </div>

          @endforeach
        </div>

    </section>

</main>

@endsection
