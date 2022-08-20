@extends('layouts.master')

@section('content')
    <div class="container custom-product">
        <div class="container col-md-4">
            <table class="table">
                
                <tbody>
                  <tr>
                    <th colspan="4">Amount</td>
                    <td>$ {{$total}}</td>
                  </tr>
                  <tr>
                    <th colspan="4">Tax</td>
                    <td>$ 0</td>
                  </tr>
                  <tr>
                    <th colspan="4">Delivery</td>
                    <td>$ 10</td>
                  </tr>
                  <tr>
                    <th colspan="4">Total Amount</td>
                    <td>$ {{$total +10}}</td>
                  </tr>
                </tbody>
              </table>

              <form action="/orderplace" method="POST">
                @csrf
                <div class="mb-3">
                  <textarea name="address" class="form-control" placeholder="Enter your address" ></textarea>
                </div>
                <div class="mb-3">
                  <label for="pwd" class="form-label"><b>Payment Method</b></label><br><br>
                  <input type="radio" value="cash" name= "payment"><span>Online Payment</span><br><br>
                  <input type="radio" value="cash" name= "payment"><span>EMI Payment</span><br><br>
                  <input type="radio" value="cash" name= "payment"><span>Payment on Delivery</span><br><br>
                </div>
                
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
        </div>
    </div>
@endsection
