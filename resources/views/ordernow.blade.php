@extends('layouts.app')

@section('content')
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


@endsection