@extends('master')
@section('content')
<div class="contailner">
    <div class="row">
        <div class="">
            <div class="col-md-12">
            <h2>Result for Products</h2>
                @foreach($products as $item)
                <div class="col-md-3 asd">
                    <div class="card {{$item['id']==1?'active':''}}" style="">
                        <a href="detail/{{$item['id']}}">
                        <img class="card-img-top img-card" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                        <div class="card-body">
                            <h3 class="text-center">{{$item['name']}}</h3>
                            <h5 class="text-center">{{$item['category']}}</h5>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="clearfix"></div>
    </div>

</div>
@endsection