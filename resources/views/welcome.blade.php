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

    @section('content')
    <div class="box-container">
        @foreach ($categories as $category)
            <div class="box">
                <a href="{{ route('category.show', ['name' => $category->name]) }}" class="box-link">
                    @if ($category->image)
                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="box-image">
                    @endif
                    <div class="box-text">
                        <b>{{ $category->name }} </b>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

 @endsection
