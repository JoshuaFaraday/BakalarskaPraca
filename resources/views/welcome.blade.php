@extends('layouts.app')

@section('title', 'AM footbal e-shop')

<div id="welcomeCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#welcomeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#welcomeCarousel" data-slide-to="1"></li>
        <li data-target="#welcomeCarousel" data-slide-to="2"></li>
        <li data-target="#welcomeCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="6000">
            <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="6000">
            <img src="{{ asset('images/caroDoplnky.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="6000">
            <img src="{{ asset('images/carousel4.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="6000">
            <video class="d-block w-100" autoplay loop muted>
                <source src="{{ asset('images/video1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <a class="carousel-control-prev" href="#welcomeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#welcomeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="box-container">
        @foreach ($categories as $category)
            <div class="box">
                <a href="{{ route('category.show', ['name' => $category->name]) }}" class="box-link">
                    @if ($category->image)
                        <img src="{{ $category->image }}" alt="{{ $category->name }}" class="box-image">
                    @endif
                    <div class="box-text">
                        <b>{{ $category->name }} </b>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


{{-- @section('content')



    <div class="box-container">
        <div class="box">
            <a href="lopty" class="box-link">
                <img src="\images\lobda.jpg" alt="Kopačky" class="box-image">
                <div class="box-text">
                    <h2>Lopty</h2>
            </a>
        </div>
    </div>
    <div class="box">
        <a href="kopacky" class="box-link">
            <img src="\images\1050116-1109297282.jpg" alt="Kopačky" class="box-image">
            <div class="box-text">
                <h2>Kopačky</h2>
        </a>
    </div>
    </div>

    <div class="box">
        <a href="chranice" class="box-link">
            <img src="\images\chraniče.jpg" alt="Chrániče" class="box-image">
            <div class="box-text">
                <h2>Chrániče</h2>
        </a>
    </div>
    </div>

    <div class="box">
        <a href="treningove-doplnky" class="box-link">
            <img src="\images\Training-kit-cely-novy-3-scaled.jpg" alt="Doplnky" class="box-image">
            <div class="box-text">
                <h2>Tréningové Doplnky</h2>
        </a>
    </div>
    </div>
    <div class="box">
        <a href="brankarske-vybavenie" class="box-link">
            <img src="\images\Oddychajace-pogrubione-rekawice-bramkarskie.jpg" alt="Bránkarske vybavenie" class="box-image">
            <div class="box-text">
                <h2>Bránkarske vybavenie</h2>
        </a>
    </div>
    </div>
    <div class="box">
        <a href="oficialne-dresy" class="box-link">
            <img src="\images\RMCFMZ0126_01_bcd7feb2-068b-4e9f-8cb7-be9b8fbcdc5b_500x480.webp" alt="Oficiálne dresy"
                class="box-image">
            <div class="box-text">
                <h2>Oficiálne dresy</h2>
        </a>
    </div>
    </div>
    <div class="box">
        <a href="rozhodca" class="box-link">
            <img src="\images\rozhodcovske-oblecenie-doplnky-potreby-vybavenie-vystroj.jpg" alt="Kopačky"
                class="box-image">
            <div class="box-text">
                <h2>Rozhodca</h2>
        </a>
    </div>
    </div>
    <div class="box">
        <a href="oblecenie" class="box-link">
            <img src="\images\336420032_max.jpg" alt="Kopačky" class="box-image">
            <div class="box-text">
                <h2>Oblečenie</h2>
        </a>
    </div>
    </div>

    <div class="box">
        <a href="zdravotne-doplnky" class="box-link">
            <img src="\images\orteza-na-koleno-kneeflex-titulka.webp" alt="Kopačky" class="box-image">
            <div class="box-text">
                <h2>Zdravotné doplnky</h2>
        </a>
    </div>
    </div>
    </div>
@endsection --}}
