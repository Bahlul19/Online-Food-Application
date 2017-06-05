@extends('layouts.masterPage')

@extends('shared.box.restaurantBox')

@section('title')

    Restaurant Section

@endsection

@section('content')

<div class="container-fluid"><!--Container-fluid Div Start-->

    <div class="row"><!--First Row Div Start-->

            <div class="col-md-6"><!--For Button Restaurant Start-->

                 <button type="button" class="btn btn-primary restaurantBox" data-target="#RestaurantBox" data-toggle="modal">
                <span class="glyphicon glyphicon-plus"></span> New Restaurant Entry
                </button>

            </div><!--For Button Restaurant End-->

        <div class="col-md-6"><!--For Flash Message Start-->
            @if(session('status'))

                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>{{session('status')}}
                </div>

            @endif
        </div><!--For Flash Message End-->


    </div><!--FIrst Row Div End-->


    <div class="row"><!--Second Row Div Start-->

        <div class="col-md-3"></div>
        <div class="col-md-9">


                <table class="table table-bordered table-striped">

                    <thead>
                    <th>Restaurant ID</th>
                    <th>Restaurant Name</th>
                    {{--<th>Area ID</th>--}}
                    <th>Area Name</th>
                    <th>Remove</th>
                    <th>Update</th>
                    </thead>

                    <tbody>

                        @foreach($table as $row)<!--Pull-Out Value From the Database-->

                            <tr>
                                <td>{{$row->restaurantID}}</td>
                                <td>{{$row->restaurantName}}</td>
                                {{--<td>{{$row->areaID}}</td>--}}
                                <td>{{$row->area['areaName']}}</td>

                                <td><a class="btn btn-danger" href="{{action('RestaurantController@getRestaurantDel',
                                ['id'=>$row->restaurantID])}}"><span class="glyphicon glyphicon-remove"></span>
                                    </a></td>
                                <td><a class="btn btn-info" href="{{action('RestaurantController@getRestaurantEdit',['id'=>$row->
                                restaurantID])}}">
                                        <span class=" glyphicon glyphicon-pencil"></span>
                                    </a></td>
                            </tr>

                        @endforeach

                    </tbody>

                </table>

    <div>{{ $table->links()  }}</div>


    </div>

    </div><!--Second Row Div End-->

</div><!--Container-Fluid Div End-->
@endsection