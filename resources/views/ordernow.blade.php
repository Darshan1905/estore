@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">

        <tbody>
            <tr>

                <td>Price</td>
                <td>{{$total}} Rs.</td>
            </tr>
            <tr>
                <td>Delivery Charges</td>
                <td>100 Rs.</td>

            </tr>
            <tr>
                <td>Total Amount</td>
                <td>{{$total + 100}}Rs.</td>

            </tr>
        </tbody>
    </table>
</div>
<div class="container mt-5">
    <form action="placeorder" method="" POST>
        @csrf
        <div class="form-group">
            <textarea name="address" placeholder="Enter your Address" class="form-control"></textarea>
        </div>
        <div class="form-group mt-4">
            <label for="">Payment Methods</label><br><br>
            <p><input type="radio" value="online payment" name="payment" id=""> Online Payment</p>
            <p><input type="radio" value="pay on delivery" name="payment" id=""> Pay on Delivery</p>
        </div>
        <button type="submit" class="btn btn-black text-white">Order Now</button>
    </form>
</div>
@endsection