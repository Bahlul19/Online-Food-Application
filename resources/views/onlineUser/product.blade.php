<!-- products -->



	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right"> 
			<form action="" method="" enctype="">
				<div class="product-top">
					<h4>Food Collection</h4>
					<!--filter by price-->

					<!--
						<div class="">
        					<p style="padding:25px 0px 0px 450px;"><input type="hidden" class="price_range" value="0,500" /></p>
        					<input style="margin-left: 740px;" type="button"  class="btn btn-success" onclick="filterProducts()" value="FILTER" />
    					</div><!--End filter by price-->
					<div class="clearfix"> </div>
				</div>
			</form>
				<div id="searchItem" class="products-row">

				@foreach($table as $row)

				<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<img style="height: 180px; width: 250px;" src="{{asset('public/productImage/')}}/{{$row->foodItemID}}.jpg" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5>{{$row->foodName}}</h5>  
									</div> 
								</div>
								<div class="back">
									<h4>{{$row->foodName}}</h4>
									<p>{{$row->foodDescription}}</p>
									<h6>{{$row->price}}<sup>TK</sup></h6>
									<form action="" method="" enctype="">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="{{$row->foodName}}"> 
										<input type="hidden" name="amount" value="{{$row->price}}"> 
										<button class="foodadd" data-id="{{$row->foodItemID}}" data-url="{{action('userorderController@userOrder')}}" data-name="{{$row->foodName}}" data-price="{{$row->price}}" type="button" class=""><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										<span class="w3-agile-line"> </span>
										<button type="button" class="moredescriptions" data-url="{{action('usercityPage@ajaxSearch')}}?id={{$row->foodItemID}}" data-toggle="modal" data-target="#myModal11">More</button>
									</form>
								</div>
							</div>
						</div> 
					</div>

				@endforeach

				<div style="margin-left:300px;">{{ $table->links() }}</div>

				


					
					<div class="clearfix"> </div>
				</div>
			</div>




			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">




                </div>
                <div class="sidebar-row">


                    <div class="clearfix"> </div>
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
					</div>		 
				</div>
				<div class="related-row">



				</div>
				<div class="related-row">



				</div>
			</div>
			<div class="clearfix"> </div>





		</div>
	</div>
	<!-- //products -->
