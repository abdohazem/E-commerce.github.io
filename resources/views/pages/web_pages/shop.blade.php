@extends('layouts.app')
  @section('title' , 'shop Mavi Store')
  @section('content')
 

   
   
    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-lg-9 order-2 order-lg-1">

           
            <div class="row mb-5">
              <div class="products-wrap border-top-0">
  <div class="container-fluid">
    <div class="row no-gutters products">
   @foreach($products as $product)
      <div class="col-6 col-md-6 col-lg-6">
        <a href="{{route('products.show',['product'=>$product->id])}}" class="item">
          <img src="{{asset('storage/'.$product->image)}}" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>{{$product->name}}</h3>
            <span class="collection d-block">{{$product->description}}</span>
            <strong class="price">${{$product->price}}</strong>
          </div>
        </a>
      </div>
      @endforeach


    </div>
  </div>
</div>
          </div>


            <div class="row">
              <div class="col-md-12 text-center">
                  {{$products->links()}}
              </div>
            </div>
          </div>

          <div class="col-lg-3 order-1 order-lg-2 mb-5 mb-lg-0">
            <div class="border p-4 mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span class="text-black ml-auto">(2,124)</span></a></li>
              </ul>
            </div>

            
          </div>
        </div>

      </div>
    </div>

   

   @endsection