@extends('master')
@section('content')
<div class="">
    <div class="">
        <div class="mx-auto p-2 custom-product">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img class="img-size d-block w-100" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                <div class="dtl mx-auto">
                    <h3 class="text-center">{{$item['name']}}</h3>
                    <h5 class="text-center">{{$item['category']}}</h5>
                    <p class="text-center">{{$item['description']}}</p>
                </div>
                </a>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        <div class="">
            <div class="col-md-12">
            @foreach($products as $item)
            <div class="col-md-3 asd">
                <div class="card {{$item['id']==1?'active':''}}" style="">
                    <a href="detail/{{$item['id']}}">
                    <img class="card-img-top img-card" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                    <div class="card-body">
                    <h3 class="text-center">{{$item['name']}}</h3>
                        <h5 class="text-center">{{$item['category']}}</h5>
                        <p class="text-center">{{$item['description']}}</p>
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