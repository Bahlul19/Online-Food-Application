@extends('layouts.masterpage')

@section('title')
    Online Food Apps
@endsection

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-primary" href="{{url('/')}}"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
            </div>
            <div class="col-md-10">
                <h3>Order item list (Order ID: {{$id}})</h3>

                <table class="table table-bordered table-striped ">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Food Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        {{--<th>Restaurant Name</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 0; ?>
                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->orderItemID}}</td>
                            <td>{{$row->foodItem['foodName']}}</td>
                            <td>{{$row->quantity}}</td>
                            <td>{{$row->foodItem['price']*$row->quantity}}</td>
                            {{--<td>{{$row->restaurant['restaurantName']}}</td>--}}

                        </tr>
                        <?php
                        $value = ($row->foodItem['price'] * $row->quantity);
                        $i += $value;
                        ?>
                    @endforeach
                    <tr>
                        <td colspan="3" style="text-align: right; font-weight: bold;">Total Amount</td>
                        <td>{{floor($i)}}</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection