@extends('layouts.app')

{{-- {{$comic['thumb']  }} --}}

@section('content')
<div class="container py-5 px-0 ">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-2 text-center d-flex flex-column">
           <img src="http://via.placeholder.com/150x150" alt=""> 
           <p class="title">
            {{ $comic['title'] }}
           </p>
        </div>


        @endforeach
    </div>
</div>
<div class="d-flex justify-content-center mb-5">
    <button class="btn btn-primary">
        LOAD MORE
    </button>
</div>
<section class="merchandise">
    <div class="container px-5">
        <div>
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
            <span>DIGITAL COMICS</span>
        </div>
        <div>
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
            <span>DC MERCHANDISE</span>
        </div>
        <div>
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
            <span>SUBSCRIPTION</span>
        </div>
        <div>
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
            <span>COMIC SHOP LOCATION</span>
        </div>
        <div>
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
            <span>DC POWER VISA</span>
        </div>
    </div>

</section>
@endsection

