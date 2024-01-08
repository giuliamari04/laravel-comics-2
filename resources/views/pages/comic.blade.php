@extends('layouts.app')

@section('title','Home')

@section('content')
<section>
    <div class="bg-primary img-comic">
    <img src="https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg" class="position-absolute " alt="img">
</div>
<div class="container px-5 py-5 m-auto m-0">
    <div class="row d-flex justify-content-center  align-content-center  align-items-center ">
    <div class="col-6">
       <h3 class="text-uppercase fw-bold ">Action comic #1000: the deluxe edition</h3>
       <div class="row" id="green-table">
        <div class="col-6">
            <span class="subtitle">U.S Price </span><span>$19.99</span>
        </div>
        <div class="col-2">
           <span class="subtitle">AVAILABLE</span>
        </div>
        <div class="col text-end border-1  border-black ">
            <span>Check Availability <i class="fa-solid fa-caret-down"></i></span>
        </div>

       </div>
       <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ullam pariatur repudiandae enim modi ex dolor optio repellat non rerum officia saepe, quos natus aliquam nobis quod autem voluptate voluptatem. Eveniet aliquam dicta maiores porro nostrum quidem, laudantium harum ad autem rem aliquid laboriosam tempora sit sint, dolores officia id quae voluptates natus impedit. Dolor, dicta! Saepe reiciendis accusamus vitae, cupiditate dolorum odio exercitationem impedit laudantium minima recusandae quidem distinctio suscipit, at delectus sed facilis, doloribus neque vel nulla maiores?</div>
    </div>
    <div class="col-4">
        <h5 class="text-end w-75">ADVERTISMENT</h5>
        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="img">
    </div>
</div>
</div>
</section>
<section class="d-flex container justify-content-center  align-content-center  align-items-center px-5">
    <ul class="col-5">
        <h3>Talent</h3>
        <li class="row  py-3">
            <div class="col-3">
                Art by:
            </div>
            <div class="col">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odit adipisci explicabo temporibus omnis dolor qui assumenda illum, aperiam obcaecati.
            </div>
        </li>
        <li class="row  py-3">
            <div class="col-3">
                Written by:
            </div>
            <div class="col">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odit adipisci explicabo temporibus omnis dolor qui assumenda illum, aperiam obcaecati.
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
                ACTION COMICS
            </div>
        </li>
        <li class="row  py-3">
            <div class="col-3">
                U.S. Price:
            </div>
            <div class="col">
               $19.99
            </div>
        </li>
        <li class="row  py-3">
            <div class="col-3">
                On Sale Date:
            </div>
            <div class="col">
               Oct 20 2018
            </div>
        </li>
    </ul>
</section>
@endsection

