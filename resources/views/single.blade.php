@extends('layouts.front')

@section('page')
 
   <div class="container">
    <div class="row medium-padding120">
        <div class="product-details">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div>
                    <div data-effect="fade">
                        <!-- Additional required wrapper -->
                        <div style="padding:0px;">
                            <!-- Slides -->
                            <div style="padding:0px;">
                                <img src="{{ asset($product->image) }}" width="500px" height="500px" alt="product" data-swiper-parallax="-10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <div class="product-details-info">
                    <div class="product-details-info-price"> Rs:{{ $product->price }}</div>
                    <h3 class="product-details-info-title">{{ $product->name }}</h3>
                    <p class="product-details-info-text">
                        {{ $product->description }}
                    </p>

                    <form action="{{ route('cart.add') }}" method="post">

                         {{ csrf_field() }}
                             <div class="quantity">
                                <a href="#" class="quantity-minus quantity-minus-d">-</a>
                                <input title="Qty" class="email input-text qty text" name="qty" type="text" value="2">
                                <a href="#" class="quantity-plus quantity-plus-d">+</a>
                             </div>

                             <input type="hidden" name="pdt_id" value="{{ $product->id}}">

                             <button class="btn btn-medium btn--primary">
                                <span class="text">Add to Cart</span>
                                <i class="seoicon-commerce"></i>
                                <span class="semicircle"></span>
                             </button> 
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div style="margin:0px auto">
    <div class="align-center" style="background-color: white;">
    <div class="fb-comments" data-href="http://localhost:8000/product" data-width="500px" data-numposts="5">
      
  </div>
</div>
</div>
</div>

   
@endsection