@extends('layouts.usermasterPage')

@section('title')
    Order
@endsection

@section('content')
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Order</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
		<div class="login-page about">
		<img class="login-w3img" src="{{asset('public/userassets/images/img3.jpg')}}" alt="">
		<div class="container">

		  <h2 style="color:#12cae2;margin-left:200px;">Order your FoodItems</h2><br>
		  <form class="form-horizontal" action="{{action('userorderController@UserorderItems')}}" method="get" enctype="multipart/form-data">
		  <!--start information-->
		  	<div class="form-group">
		      <label class="control-label col-sm-2" for="name">Name:</label>
		      <div class="col-sm-10" style="width: 500px">
		        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="customerName"required="">
		      </div>
		    </div><br>




		    <div class="form-group">
		      <label class="control-label col-sm-2" for="email">Email:</label>
		      <div class="col-sm-10" style="width: 500px">
		        <input type="text" class="form-control" id="email" placeholder="Enter your Email" name="customerEmail"required="">
		      </div>
		    </div><br>

		    <div class="form-group">
		      <label class="control-label col-sm-2" for="number">Number:</label>
		      <div class="col-sm-10" style="width: 500px">
		        <input type="text" class="form-control" id="number" placeholder="Enter your number" name="customerNumber"required="">
		      </div>
		    </div><br>


		    <div class="form-group">
		      <label class="control-label col-sm-2" for="name">Address:</label>
		      <div class="col-sm-10" style="width: 500px">
		        <input type="text" class="form-control" id="name" placeholder="Enter your address" name="customerAddress"required="">
		      </div>
		    </div><br>

		    <div class="form-group">
		      <label class="control-label col-sm-2" for="payment">Payment:</label>
		      <div class="col-sm-10" style="width: 500px">
		        <input type="text" class="form-control" id="email" placeholder="Enter your payment" name="payment"required="">
		      </div>
		    </div><br>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="payment_type">Payment Type:</label>
		       <div class="form-check form-check-inline col-sm-10" style="width: 500px">
  					<label class="form-check-label">
    				<input class="form-check-input" type="radio" name="payment_type" id="inlineRadio1" value="bikash"> Bkash
  					</label>
				</div>
				<br/>


				<div class="form-check form-check-inline col-sm-10" style="width: 500px">
  					<label class="form-check-label">
    				<input class="form-check-input" type="radio" name="payment_type" id="inlineRadio1" value="cash"> Cash in delivary
  					</label>
				</div>


		    </div><br>


		    <div class="form-group">
		      <label class="control-label col-sm-2" for="massage">Massage:</label>
		      <div class="col-sm-10" style="width: 500px">
		        <input type="text" class="form-control" id="customerMessage" placeholder="Enter your massage and if check bkash plz add your number" name="customerMessage"required="">
		        	
		      </div>
		    </div><br><!--end information-->
             <!--fooditems-->
             <h3 style="text-align: center;">All Orders Items</h3><br>

		    <div class="col-md-6" >
		    	<table class="table table-bordered table-striped " style="margin-left: 110px">
		    		<thead >
						<tr>
							<th>FoodItem Name</th>
							<th>Quantity</th>
							<th>Price</th>
						</tr>
					</thead>

					<tbody>
					<?php $i=0; ?>
					@foreach($table as $row)
						<tr>
							<td>{{$row->foodName}}</td>
							<td>{{$row->quantitys}}</td>
							<td>{{$row->price * $row->quantitys}}</td>
						</tr>
						<?php
							$value = $row->price * $row->quantitys;
							$i+=$value;
						 ?>
						@endforeach
							<td colspan="2" style="text-align: right;">Total Price</td>
  							<td>{{$i}}</td>
					</tbody>
		    	</table>
		    </div>

		    <div class="form-group">
		      <div class="col-sm-offset-2 col-sm-10" >
		        <button type="submit" class="btn btn-success" style="background-color:#12cae2;margin-left: 370px; width: 100px;">Submit</button>
		      </div>

		    </div>
		    <p style="color: red; font-size:25px;">Payment : Cash in delivary</p>
		  </form>


		</div>

	</div>
	<!-- //sign up-page -->

    

    

@endsection