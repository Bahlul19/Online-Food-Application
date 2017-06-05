@extends('layouts.masterPage')

@extends('shared.box.fooditemBox')

@section('title')

    Food Item Section

@endsection

@section('content')

<div class="container-fluid"><!--Container-fluid Div Start-->

   <div class="row"><!--First Row Of The Div Start-->

       <div class="col-md-6"><!--For Button Restaurant Start-->


           <button type="button" class="btn btn-primary fooditemBox" data-target="#FoodItemBox" data-toggle="modal">
               <span class="glyphicon glyphicon-plus"></span> New Food Item Entry
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

   </div><!--First Row Of The Div End-->

    <div class="row"><!--Second Row Of The Div Start-->


      <div class="col-md-2"></div>

        <div class="col-md-10">


            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Food Item ID</th>
                    <th>Food Name</th>
                    <th>Food Description</th>
                    <th>Price</th>
                    <th>Food Tag</th>
                    {{--<th>Restaurant ID</th>--}}
                    <th>Restaurant Name</th>
                    <th>Remove</th>
                    <th>Update</th>
                </tr>
                </thead>

                <tbody>

                @foreach($table as $row)

                    <tr>
                        <td>{{$row->foodItemID}}</td>
                        <td>{{$row->foodName}}</td>
                        <td>{{$row->foodDescription}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->foodTag}}</td>
                        {{--<td>{{$row->restaurantID}}</td>--}}
                        <td>{{$row->restaurant['restaurantName']}}</td>


                        <td>
                            <a class="btn btn-danger" href="{{action('FoodItemController@getFoodItemDel',['id'=>$row->foodItemID])}}">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a> </td>
                        <td><a class="btn btn-info" href="{{action('FoodItemController@getFoodItemEdit',['id'=>$row->foodItemID])}}">
                                <span class=" glyphicon glyphicon-pencil"></span>
                            </a></td>
                    </tr>

                @endforeach

                </tbody>

            </table>
            <div>{{ $table->links()  }}</div>


        </div>

    </div><!--Second Row Of The Div End-->
</div><!--Container-Fluid Div End-->

@endsection

