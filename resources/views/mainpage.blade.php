@extends('layouts.masterpage')

@section('title')
    Online Food Apps
@endsection

@section('content')
   
<div class="container-fluid">

	<div class="row">
		<div class="col-md-12">
			<h3>Order list</h3>
			<table class="table table-bordered table-striped ">
				<thead>
					<tr>
						<th>OrderID</th>
						<th>Date</th>
						<th>Customer Name</th>
						<th>Address</th>
						<th>Contact No</th>
						<th>Comments</th>
						<th>Payment</th>
						<th>Status</th>
						<th>Approve</th>
						<th>Cancel</th>
						<th>Details</th>
						<th style="text-align: right;">Delete</th>
					</tr>
				</thead>

				<tbody>
				@foreach($table as $row)
					<tr>
						<td>{{$row->orderID}}</td>
						<td>{{date('d/m/Y', strtotime($row->created_at))}}</td>
						<td>{{$row->customer['customerName']}}</td>
						<td>{{$row->customer['customerAddress']}} </td>
						<td>{{$row->customer['customerNumber']}}</td>
						<td>{{$row->customerMessage}}</td>
						<td>{{$row->payment}}</td>
						<td>{{$row->orderStatus}}</td>

						<td>
                            <a class="btn btn-success" href="{{action('userorderController@order_approve', [$row->orderID])}}">
                                <span class="glyphicon glyphicon-ok"></span>
                            </a>
						</td>
						<td>
							<a class="btn btn-danger" href="{{action('userorderController@order_cancel', [$row->orderID])}}">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
						</td>
						<td>
							<a class="btn btn-primary" href="{{action('userorderController@order_view', [$row->orderID])}}">
                               More
                            </a>
						</td>
						<td>
							<a class="close" href="{{action('userorderController@order_del', [$row->orderID])}}">
								<span aria-hidden="true">&times;</span>
							</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection