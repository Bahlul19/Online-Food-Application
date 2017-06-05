@extends('layouts.usermasterPage')

@section('title')
   Our Foods
@endsection

@section('content')

   
    @include('onlineUser.orders')
    @include('onlineUser.deals')
    @include('onlineUser.dishes')

@endsection

@section('script')
	
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

	


@endsection


