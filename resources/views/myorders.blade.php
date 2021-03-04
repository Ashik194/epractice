@extends('master')
@section('content')
<div class="">
    <div class="">
            <div class="col-md-10">
            
                @foreach($orders as $item)
                <div class="col-md-3">
                    
                        <img class="img-size d-block w-100" src="{{$item->gallery}}" alt="">
                    
                        <h2 class="text-center">{{$item->name}}</h2>
                        <h5 class="text-center">Delevary status : {{$item->status}}</h5>
                        <h5 class="text-center">Payment status : {{$item->payment_status}}</h5>
                        <h5 class="text-center">Payment method : {{$item->payment_method}}</h5>
                        <h5 class="text-center">Address : {{$item->address}}</h5>
                        <h5 class="text-center">Price : {{$item->price}}</h5>

                        
                    
                    
                </div>
                @endforeach
            </div>
            
        <div class="clearfix"></div>
        </div>

</div>
@endsection