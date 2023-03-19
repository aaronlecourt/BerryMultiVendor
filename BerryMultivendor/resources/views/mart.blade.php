@extends('index')
@section('title','BerryMart')

@section('home-content')
<div class="container p-5">
    <div class="card-deck d-flex">
        @foreach($products as $product)
        <div class="card">
            <img src="{{$product['gallery']}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$product['product_name']}}</h5>
              <p class="card-text">{{$product['description']}}</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">{{$product['category']}}</small>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection