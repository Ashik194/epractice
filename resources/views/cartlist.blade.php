@extends('master')
@section('content')
<div class="">
    <div class="">
            <div class="col-md-10">
            <a href="/ordernow" class="btn btn-success">Order Now</a><br><br>
                @foreach($products as $item)
                <div class="col-md-3">
                    
                        <img class="img-size d-block w-100" src="{{$item->gallery}}" alt="">
                    
                        <h3 class="text-center">{{$item->name}}</h3>
                        <h5 class="text-center">{{$item->category}}</h5>
                        <p class="text-center">{{$item->description}}</p>

                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove Cart</a>
                    
                    
                </div>
                @endforeach
            </div>
            
        <div class="clearfix"></div>
        </div>

</div>
@endsection