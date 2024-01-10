@extends('layouts.app')

@section('title', 'DETTAGLIO FUMETTO')

@section('content')
    <main>
        <section>
            <div class="bg-primary img-comic">
                <img src="{{ $comic->thumb }}" class="position-absolute " alt="img">
            </div>
            <div class="container py-5 m-auto m-0">
                <div class="row d-flex flex-nowrap  justify-content-center  align-content-center  align-items-center ">
                    <div class="col-6">
                        <h3 class="text-uppercase fw-bold ">{{ $comic->title }}</h3>
                        {{-- tabella verde --}}
                        <div class="row" id="green-table">
                            <div class="col-6">
                                <span class="subtitle">U.S Price </span><span>{{ $comic->price }}</span>
                            </div>
                            <div class="col-2">
                                <span class="subtitle">AVAILABLE</span>
                            </div>
                            <div class="col text-end border-1  border-black ">
                                <span>Check Availability <i class="fa-solid fa-caret-down"></i></span>
                            </div>

                        </div>
                        {{-- descrizione --}}
                        <div class="py-2">{{ $comic->description}}</div>

                    </div>
                     {{-- pubblicità --}}
                     <div class="col-4">
                        <h5 class="text-end w-75">ADVERTISMENT</h5>
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="img">
                    </div>
                </div>
        </section>
        <section class=" container m-auto m-0 px-5">
            <div class="row d-flex  justify-content-center  align-content-center  align-items-center">
            <ul class="col-5">
                <h3>Talent</h3>
                <li class="row  py-3">
                    <div class="col-3">
                        Art by:
                    </div>
                    <div class="col">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odit adipisci explicabo
                        temporibus omnis dolor qui assumenda illum, aperiam obcaecati.
                    </div>
                </li>
                <li class="row  py-3">
                    <div class="col-3">
                        Written by:
                    </div>
                    <div class="col">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odit adipisci explicabo
                        temporibus omnis dolor qui assumenda illum, aperiam obcaecati.
                    </div>
                    <div class="col">
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Modifica</a>
                        <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                           <button type="submit" class="btn btn-danger"> cancella</button>
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="col-6">
                <h3>Specs</h3>
                <li class="row py-3">
                    <div class="col-3">
                        series:
                    </div>
                    <div class="col">
                        {{ $comic->type }}
                    </div>
                </li>
                <li class="row  py-3">
                    <div class="col-3">
                        U.S. Price:
                    </div>
                    <div class="col">
                        {{ $comic->price }}
                    </div>
                </li>
                <li class="row  py-3">
                    <div class="col-3">
                        On Sale Date:
                    </div>
                    <div class="col">
                        {{ $comic->sale_date }}
                    </div>
                </li>
            </ul>
        </div>
        </section>
        @include('partials.modal_delete');
    </main>

@endsection
