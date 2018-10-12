<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <style type="text/css">
        html,body {
    margin: 0;
    padding: 0;
}
.slider {
    width: 1024px;
    margin: 2em auto;
    
}

.slider-wrapper {
    width: 100%;
    height: 400px;
    position: relative;
}

.slide {
    float: left;
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 3s linear;
}

.slider-wrapper > .slide:first-child {
    opacity: 1;
}

    </style>

</head>


<body>

 <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

            <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5a06a10abb0c3f433d4c888f/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->

<header class="header" id="site-header"  style="background-color:#222222; padding-top:0px;">

    <div class="container navbar">
        <div class="" style="color:red; float:left; width:75%;">
            <a href="{{route('area')}}"><img src="{{asset('uploads/products/logo.png')}}" width="125px" height="125px"></a>
        </div>

        <div class="header-content-wrapper" style="float:right; width:25%;">

            <ul class="nav-add">
                <li><a style="color:white; font-size:20px;" href="{{ route('regist') }}">Login&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li><a style="color:white; font-size:20px;">Register&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <span class="cart-count">{{ Cart::content()->count() }}</span>
                        <i class="fa fa-shopping-cart fa-2x" style="color:white;"></i>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart align-center"> Total:-Rs:{{ Cart::total()}}</h4>
                            <br>
                            <a href="/cart">
                                <div class="btn btn-small btn--dark">
                                  <span class="text">view Cart</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>
<div class="align-center" style="font-size:20px; float:left; padding: 5px 0px 5px 230px;">
    <ul class="nav-add" style="color:orange;">
        <li>Areas -> </li>
        <li><a href="{{route('index')}}" style="color:white;">Area 1</a></li>
        <li><a href="{{route('index1')}}" style="color:white;">Area 2</a></li>
        <li><a href="{{route('index2')}}" style="color:white;">Area 3</a></li>
    </ul>
</div>

</header>


<div class="content-wrapper" style="background-color:#013243; padding-top:30px;">
    <!-- End Books products grid -->

    @yield('page')

</div>

<!-- Footer -->

<footer class="footer" style="padding:20px;">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h3>About Us</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h3>Contact Us</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h3>Address</h3>
                </div>
            </div>
        </div>
</footer>



<script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('app/js/theme-plugins.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="{{ asset('app/js/form-actions.js') }}"></script>

<script src="{{ asset('app/js/velocity.min.js') }}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- ...end JS Script -->

<script>
    @if(Session::has('success'))
        toastr.success('{{Session::get('success')}}');
    @endif
</script>
<script type="text/javascript">
    (function() {
    
    function Slideshow( element ) {
        this.el = document.querySelector( element );
        this.init();
    }
    
    Slideshow.prototype = {
        init: function() {
            this.wrapper = this.el.querySelector( ".slider-wrapper" );
            this.slides = this.el.querySelectorAll( ".slide" );
            this.previous = this.el.querySelector( ".slider-previous" );
            this.next = this.el.querySelector( ".slider-next" );
            this.index = 0;
            this.total = this.slides.length;
            this.timer = null;
            
            this.action();
            this.stopStart();   
        },
        _slideTo: function( slide ) {
            var currentSlide = this.slides[slide];
            currentSlide.style.opacity = 1;
            
            for( var i = 0; i < this.slides.length; i++ ) {
                var slide = this.slides[i];
                if( slide !== currentSlide ) {
                    slide.style.opacity = 0;
                }
            }
        },
        action: function() {
            var self = this;
            self.timer = setInterval(function() {
                self.index++;
                if( self.index == self.slides.length ) {
                    self.index = 0;
                }
                self._slideTo( self.index );
                
            }, 5000);
        },
        stopStart: function() {
            var self = this;
            self.el.addEventListener( "mouseover", function() {
                clearInterval( self.timer );
                self.timer = null;
                
            }, false);
            self.el.addEventListener( "mouseout", function() {
                self.action();
                
            }, false);
        }
        
        
    };
    
    document.addEventListener( "DOMContentLoaded", function() {
        
        var slider = new Slideshow( "#main-slider" );
        
    });
    
    
})();

</script>

</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>