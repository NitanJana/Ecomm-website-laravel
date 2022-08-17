@extends('layouts.master')

@section('content')
    <div class="custom-product">
        <div class="col-md-4">
            <a class="text-decoration-none" href="#">Filter</a>
        </div>
        <div class="col-md-10 offset-md-2">
            <div class="trending-wrapper">
                <h3>Resullt for searcched Products</h3>
                <a class="btn btn-success" href="ordernow">Order Now</a>
                @foreach ($products as $item)
                <div class="row searched-item cart-list-divider">
                        <div class="col-md-3">
                            <a class="text-decoration-none" href="detail/{{ $item->id}}">
                                <img src="{{ $item->gallery }}" class="trending-image" alt="...">
                                
                            </a>
                        </div>
                        
                        <div class="col-md-3">
                            
                                <div class="">
                                    <h2>{{ $item->name}}</h2>
                                    <h5>{{ $item->description }}</h5>
                                </div>
                            
                        </div>

                        <div class="col-md-4 offset-md-1">
                            <a href="/removeItem/{{ $item->cart_id }}" class= "btn btn-warning">Remove from Cart</a>
                        </div>
                        
                    </div>
                    @endforeach
                    <a class="btn btn-success" href="ordernow">Order Now</a>
            </div>
        </div>
    </div>
@endsection
