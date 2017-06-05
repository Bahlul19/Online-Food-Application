@extends('layouts.masterPage')

@section('title')
    Area Page Edit
@endsection

@section('content')

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">


            <form action="{{action('AreaController@getAreaEditSave')}}" method="get" enctype="multipart/form-data"><!--Form Start-->

                {{ csrf_field() }}

                <input type="hidden" name="areaID" value="{{$table->areaID}}">
                    <div class="input-group has-warning has-feedback">

                        <span class="input-group-addon" id="basic-addon1">Area Name:</span>

                        <input type="text" name="areaName" class="form-control" value="{{$table->areaName}}">

                        <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                    </div>

                <br/>

                    <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                    <button type="submit" class="btn btn-info btn-sm">Update</button>



       </form>
    </div>
    </div>

@endsection