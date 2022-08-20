@extends('layouts.master')

@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                @csrf
                <form action="/placeholder bg-light" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" name="name" class="form-control placeholder bg-light" id="exampleInputEmail1" placeholder="User Name"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control placeholder bg-light" id="exampleInputEmail1" placeholder="Email"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="passwword" class="form-control placeholder bg-light" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
