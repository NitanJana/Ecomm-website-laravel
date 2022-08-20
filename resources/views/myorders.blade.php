@extends('layouts.master')

@section('content')
    <div class="custom-product">
        <div class="col-md-4">
            <a class="text-decoration-none" href="#">Filter</a>
        </div>
        <div class="col-md-10 offset-md-2">
            <div class="trending-wrapper">
                <h3>My Orders</h3>
                @foreach ($orders as $item)
                <div class="row searched-item cart-list-divider">
                        <div class="col-md-3">
                            <a class="text-decoration-none" href="detail/{{ $item->id}}">
                                <img src="{{ $item->gallery }}" class="trending-image" alt="...">
                                
                            </a>
                        </div>
                        
                        <div class="col-md-4">
                            
                                <div class="">
                                    <h2>{{ $item->name}}</h2>
                                    <h5>Delivery Status : {{ $item->status }}</h5>
                                    <h5>Address : {{ $item->address }}</h5>
                                    <h5>Payment Status : {{ $item->payment_status }}</h5>
                                    <h5>Payment Method : {{ $item->payment_method }}</h5>
                                </div>
                            
                        </div>

                        
                        
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
