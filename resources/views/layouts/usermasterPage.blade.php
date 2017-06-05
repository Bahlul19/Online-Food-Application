<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html" />
    

    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{asset('public/userassets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('public/userassets/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('public/userassets/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('public/userassets/css/style.css')}}" />



    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Berkshire+Swash" />

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" />
    @yield('style')

</head>
<body>
    
        <div>
            @include('onlineUser.banner')
        </div>

        <div>
            @yield('content')
        </div>

        <div>
            @include('onlineUser.sfooter')
        </div>


<script src="{{asset('public/userassets/js/jquery-2.2.3.min.js')}}"></script> 
<script src="{{asset('public/userassets/js/owl.carousel.js')}}"></script>
<script src="{{asset('public/userassets/js/jquery.jscrollpane.min.js')}}"></script>  
<script src="{{asset('public/userassets/js/minicart.js')}}"></script>


<script src="{{asset('public/userassets/js/SmoothScroll.min.js')}}"></script>
<script src="{{asset('public/userassets/js/move-top.js')}}"></script>
<script src="{{asset('public/userassets/js/easing.js')}}"></script>

<script src="{{asset('public/userassets/js/bootstrap.js')}}"></script>

<script src="{{asset('public/custom.js')}}"></script>
@yield('script')

        <!-- cart-js--> 
   <script src="js/minicart.js"></script>
    <script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) { 
                }
            }
        });
    </script>
    <!-- //cart-js -->

    <!-- Owl-Carousel-JavaScript -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel ({
                items : 3,
                lazyLoad : true,
                autoPlay : true,
                pagination : true,
            });
        });
    </script>
    <!-- //Owl-Carousel-JavaScript -->      


    <!-- start-smooth-scrolling -->
    <script src="js/SmoothScroll.min.js"></script>  
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script> 
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
            
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
</body>
</html>