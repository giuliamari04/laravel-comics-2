@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main id="card-content">
    <section class="container py-5" >
        <div>
            <form action="{{route('comics.index')}}" method="GET">

                <select name="search" id="search">
                <option value="">All</option>
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>

            </select>



            <button type="submit" class="btn btn-danger ms-3">Cerca</button>
        </form>
        </div>
        @if (session()->has('message'))
        <div class="alert alert-success ">
            {{session('message')}}
        </div>
        @endif
        <h1 class="text-light py-3">List Comics</h1>
        <div class="row gy-4">
          @foreach ($comics as $comic)
            <div class="col-12 col-md-4 col-lg-2">
                <div class="card bg-trasparent text-light border-1 border-light h-100">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="card-img-top">
                    <div class="card-body d-flex flex-column justify-content-between ">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{!! substr($comic->description, 0, 100) . '...' !!}</p>
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Vedi dettaglio</a>
                        <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                           <button type="submit" class="btn btn-danger"> cancella</button>
                        </form>

                    </div>
                </div>
            </div>

          @endforeach
        </div>

    </section>
    @include('partials.modal_delete');
</main>

@endsection
