@extends('layouts.usermasterPage')

@section('title')
   Food List
@endsection

@section('content')
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="{{url('userhome')}}"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Dishes</li>
		</ol>
	</div>
	@if(session('msg')!='')
		<div class="container">
		<h3 style="text-align: center; color: #FFFFFF; background-color: #5cb85c;">{{session('msg')}}</h3>
		</div>
	@endif
	<!-- //breadcrumb -->
    @include('onlineUser.product')

    @include('onlineUser.underproduct')

    @include('onlineUser.dishes')

    @include('onlineUser.model')

	<div class="myChartBox"  data-url="{{action('userorderController@cartList')}}">
		<table id="myChartBox" style="width: 100%;" class="table table-bordered">

		</table>
		<p style="text-align: right; font-weight: bold; color: #FFFFFF;" id="takTotal"></p>
		<p id="okButon" style="text-align: left;"></p>
	</div>

@endsection


@section('script')


	<!-- the jScrollPane script -->
	
	<script type="text/javascript" id="sourcecode">
		$(function()
		{
			$('.scroll-pane').jScrollPane();
		});
	</script>
	<!-- //the jScrollPane script -->

	<!-- Owl-Carousel-JavaScript -->
	
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
	<!--price filter script-->
					<script type="text/javascript">
							$('.price_range').jRange({
    							from: 0,
    							to: 500,
    							step: 1,
    							scale: [0,100,200,300,400,500],
    							format: '%s TK',
    							width: 250,
    							showLabels: true,
    							isRange : true
								});
					</script>
	<!--End price filter script-->
						
	<!-- script for tabs -->						
	<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->





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
    <!-- //smooth-scrolling-of-move-up -->

    <script type="text/javascript">
		$(function () {
			cartList();
		});

		$('.foodadd').click(function () {
			var foodID = $(this).data('id');
			var foodName = $(this).data('name');
			var foodPrice = $(this).data('price');
			var urls = $(this).data('url');

			$.ajax({
				url: urls,
				type: 'get',
				//dataType: 'json',
				data: {'foodItemID':foodID, 'foodName':foodName, 'quantity':1, 'price':foodPrice},
				success:function(result){
					//if()
					cartList();
				}
			});
		});

		function cartList() {
			var urls = $('.myChartBox').data('url');
			var taka = 0;
			var tbl = '';
			$.ajax({
				url: urls,
				type: 'get',
				dataType: 'json',
				//data: {'foodItemID':foodID, 'foodName':foodName, 'price':foodPrice},
				success:function(result){
					//var jj = result.item;

					if(result.length > 0){
						for(var i=0; i<result.length; i++){
							tbl += '<tr><td style="color: #FFFFFF;">'+result[i].foodName+'</td><td style="color: #FFFFFF;">'+result[i].quantity+'</td><td style="text-align: right;color: #FFFFFF;">'+result[i].price+'</td></tr>';

							taka += result[i].price;
						}
						$('#myChartBox').html(tbl);
						$('#takTotal').html('BDT '+taka.toFixed(2));
						$('#okButon').html('<a href="{{action('userorderController@adminordershow')}}" class="btn btn-success">CheckOut</a>')
					}


				}
			});
		}

        
    $(function () {

        $('.moredescriptions').on('click', function (e) {
        //e.preventDefault();

        var urls = $(this).data('url');

        $.ajax({
        url: urls,
        type: 'get',
        dataType: 'json',
        data: $(this).serialize(),
        success:function(result){
        	$('#item_name').html(result.foodname);
        	$('#Imagesview').attr('src', 'public/productImage/'+result.foodItemID+'.jpg');
        	$('#price').html(result.foodprice);
        	$('#description').html(result.fooddescription);
        	$('#Restaurantname').html(result.restaurantname);
       		$('#Areaname').html(result.areaname);

        		}
       		});



     	});
      });
    </script>

  






@endsection






