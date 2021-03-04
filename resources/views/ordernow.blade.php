@extends('master')
@section('content')
<div class="">
    <div class="">
        <div class="mx-auto p-2 custom-product">
        <table class="table table-striped">
        
        <tbody>
            <tr>
            <td>Price</td>
            <td>{{$total}} Taka</td>
            
            </tr>
            <tr>
            <td>Taxe's</td>
            <td>0 Taka</td>
            
            </tr>
            <tr>
            <td>Delivery</td>
            <td>60 Taka</td>
            
            </tr>
            <tr>
            <td>Total Amount</td>
            <td>{{$total+60}}</td>
            </tr>
        </tbody>
        </table>
        
        </div>
        <div class="clearfix"></div>

        <form action="orderplace" method="post">
            <div class="form-group">
                @csrf
                <textarea name="address" placeholder="Enter your address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="">Payment</label>
                <p><input type="radio" value="online" name="payment"><span>Online Payment</span></p>
                <p><input type="radio" value="emi" name="payment"><span>EMI Payment</span></p>
                <p><input type="radio" value="cash" name="payment"><span>Cash Payment</span></p>
            </div>
            <button type="submit" class="btn btn-primary">Make Payment</button>
            </form>

</div>
@endsection