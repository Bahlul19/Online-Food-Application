@extends('layouts.masterPage')
@section('title')
    FoodItem Page Edit
@endsection

@section('content')

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">


            <form action="{{action('FoodItemController@getFoodItemEditSave')}}" method="get" enctype="multipart/form-data"><!--Form Start-->

                {{ csrf_field() }}

                <input type="hidden" name="foodItemID" value="{{$table->foodItemID}}">


                <select name="restaurantID" class="form-control">

                    @foreach($restaurant as $row)


                        <option value="{{$row->restaurantID}}">{{$row->restaurantName}}</option>

                    @endforeach

                </select>

                <br/>

                <div class="input-group has-warning has-feedback">

                    <span class="input-group-addon" id="basic-addon1">Food Name:</span>

                    <input type="text" name="foodName" class="form-control" value="{{$table->foodName}}">

                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                </div>

                <br/>

                <div class="input-group has-warning has-feedback">

                    <span class="input-group-addon" id="basic-addon1">Food Description:</span>

                    <input type="text" name="foodDescription" class="form-control" value="{{$table->foodDescription	}}">

                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                </div>
                <br/>


                <div class="input-group has-warning has-feedback">

                    <span class="input-group-addon" id="basic-addon1">Food Price:</span>

                    <input type="text" name="price" class="form-control" value="{{$table->price}}">

                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                </div>
                <br/>



                <div class="input-group has-warning has-feedback">

                    <span class="input-group-addon" id="basic-addon1">Food Tag:</span>

                    <input type="text" name="foodTag" class="form-control" value="{{$table->foodTag}}">

                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                </div>

                <br/>

                <button type="button" class="btn btn-default pull-left" >Close</button>
                <button type="submit" class="btn btn-info btn-sm pull-right">Update</button>



            </form>
        </div>
    </div>

@endsection