@extends('layouts.masterPage')
@section('title')
    Restaurant Page Edit
@endsection

@section('content')

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">


            <form action="{{action('RestaurantController@getRestaurantEditSave')}}" method="get" enctype="multipart/form-data"><!--Form Start-->

                {{ csrf_field() }}

                <input type="hidden" name="restaurantID" value="{{$table->restaurantID}}">


                    <select name="areaID" class="form-control">

                    @foreach($area as $row)


                      <option value="{{$row->areaID}}">{{$row->areaName}}</option>

                    @endforeach

                   </select>
                  <br/>



                <div class="input-group has-warning has-feedback">

                    <span class="input-group-addon" id="basic-addon1">Area Name:</span>

                    <input type="text" name="restaurantName" class="form-control" value="{{$table->restaurantName}}">

                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                </div>

                <br/>

                <button type="button" class="btn btn-default ">Close</button>
                <button type="submit" class="btn btn-info btn-sm">Update</button>



            </form>
        </div>
    </div>

@endsection
