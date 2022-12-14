@extends('layouts.master')

@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control placeholder bg-light" placeholder="Email" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="passwword" class="form-control placeholder bg-light" placeholder="Password" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
