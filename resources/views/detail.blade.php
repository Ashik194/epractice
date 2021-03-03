@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <img class="prsize" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-md-6">
            <a href="">Go Back</a>
            <br><br>
            <h2>Name : {{$product['name']}}</h2>
            <h3>Category : {{$product['category']}}</h3>
            <h4>Price: {{$product['price']}}</h4>
            <h4>Description: {{$product['description']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="post">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-success">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
        </div>
    </div>
</div>
@endsection