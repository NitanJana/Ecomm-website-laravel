@extends('layouts.master')

@section('content')
    <div class="container custom-product">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    @foreach ($products as $item)
                        <div class="carousel-inner">
                            <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                                <a href="detail/{{$item['id']}}">
                                    <img src="{{ $item['gallery'] }}" class="slider-img d-block w-100" alt="...">
                                    <div class="carousel-caption slider-text d-none d-md-block">
                                        <h5>{{ $item['name'] }}</h5>
                                        <p>{{ $item['description'] }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="trending-wrapper">
            <h3>Trending Products</h3>
            @foreach ($products as $item)
            <div class="trending-item">
                <a class = "text-decoration-none" href="detail/{{$item['id']}}">
                    <img src="{{ $item['gallery'] }}" class="trending-image" alt="...">
                    
                        <h5 class="">{{ $item['name'] }}</h5>
                    
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
