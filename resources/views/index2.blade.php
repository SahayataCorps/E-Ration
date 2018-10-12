@extends('layouts.front')

@section('page')
 
<div class="slider" id="main-slider" style="width:100%;"><!-- outermost container element -->
    <div class="slider-wrapper""><!-- innermost wrapper element -->
        <img src="{{asset('uploads/products/wall1.jpg')}}" alt="First" class="slide" /><!-- slides -->
        <img src="{{asset('uploads/products/wall2.jpg')}}" alt="Second" class="slide" />
        <img src="{{asset('uploads/products/wall3.jpg')}}" alt="Third" class="slide" />
    </div>
</div>  
<hr>
<h1 class="align-center" style="color: white;">Our products</h1>
<hr>

   <div class="container">
        <div class="row" style="padding-top:35px;">
            <div class="books-grid">

            <div class="row mb30" >
               @foreach($products as $product)
                   <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="books-item" style="background:linear-gradient(to bottom, #34e89e, #0f3443)">
                        <div class="books-item-thumb">
                            <img src="{{ asset($product->image) }}" alt="book">
                            <div class="new">New</div>
                            <div class="sale">Sale</div>
                            <div class="overlay overlay-books"></div>
                        </div>

                        <div class="books-item-info">
                            <a href="{{ route('product.single', ['id' => $product->id]) }}">
                                <h5 class="books-title">{{ $product->name }}</h5>
                            </a>

                            <div class="books-price"> Rs:{{ $product->price }}</div>
                        </div>

                        <a href="{{ route('cart.rapid.add', ['id'=>$product->id])}}" class="btn btn-small btn--dark add">
                            <span class="text">Add to Cart</span>
                            <i class="seoicon-commerce"></i>
                        </a>

                    </div>
                </div>
               @endforeach
            </div>

            <div class="row pb120">
              <div class="col-lg-12"> {{$products->links()}} </div>
              

            </div>
        </div>
        </div>
    </div>

@endsection