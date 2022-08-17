@extends('layouts.master')

@section('content')
    <div class="custom-product">
        <div class="col-md-4">
            <a class="text-decoration-none" href="#">Filter</a>
        </div>
        <div class="col-md-4 offset-md-4">
            <div class="trending-wrapper">
                <h3>Resullt for searcched Products</h3>
                @foreach ($products as $item)
                    <div class="searched-item">
                        <a class="text-decoration-none" href="detail/{{ $item['id'] }}">
                            <img src="{{ $item['gallery'] }}" class="trending-image" alt="...">
                            <div class="">
                                <h2>{{ $item['name'] }}</h2>
                                <h5>{{ $item['description'] }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
