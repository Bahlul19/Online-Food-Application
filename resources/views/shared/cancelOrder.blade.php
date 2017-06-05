@extends('layouts.masterpage')

@section('title')
    Online Food Apps
@endsection

@section('content')
   
<div class="container-fluid">
	<h4 style="margin-left: 400px;">All Cancel Orders</h4>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<table class="table table-bordered table-striped ">
				<thead>
					<tr>
						<th>Order ID</th>
						<th>FoodItem</th>
						<th>RestaurantName</th>
						<th>Order status</th>
						<th>Payment status</th>
						<th>Customer Name</th>
						<th>Approve</th>
						<th>Details</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>Chicken </td>	
						<td>Palki</td>
						<td>Delivering</td>
						<td>Due</td>
						<td>Dipen</td>
						<td>
                            <a class="btn btn-danger" href="">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
						</td>
						<td>
							<a class="btn btn-primary" href="{{url('orderdetails')}}">
                               More
                            </a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
                               
                          
</div>
<!--<a class="btn btn-primary" href="{{url('/')}}">Back</a> -->
@endsection