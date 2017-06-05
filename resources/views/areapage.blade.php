@extends('layouts.masterPage')

@extends('shared.box.areaBox')

@section('title')
    Area Section
@endsection

@section('content')

    <div class="container-fluid"><!--Container-fluid Div Start-->

         <div class="row"><!--First Row Div Start-->

                <div class="col-md-6"><!--For Button Area Start-->
                <button type="button" class="btn btn-primary areaBox" data-target="#AreaBox" data-toggle="modal">
                    <span class="glyphicon glyphicon-plus"></span> New Area Entry
                </button>
                </div><!--For Button Area End-->

                <div class="col-md-6"><!--For Flash Message Start-->

                  @if(session('status'))

                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>{{session('status')}}
                        </div>

                  @endif

            </div><!--For Flash Message End-->

    </div><!--First Row Div Start-->



        <div class="row"><!--Second Row Div Start-->

            <div class="col-md-2"></div>
            <div class="col-md-10">


               <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Area ID</th>
                        <th>Area Name</th>
                        <th>Remove</th>
                        <th>Update</th>
                    </tr>
                    </thead>

                    <tbody>

                   @foreach($table as $row)<!--Pull-Out Value From the Database-->


                       <tr>
                           <td>{{$row->areaID}}</td>
                           <td>{{$row->	areaName}}</td>

                           <td><a class="btn btn-danger" href="{{action('AreaController@getAreaDel',['id'=>$row->areaID])}}">
                                   <span class=" glyphicon glyphicon-remove"></span>
                               </a></td>

                           <td><a class="btn btn-info" href="{{action('AreaController@getAreaEdit',['id'=>$row->areaID])}}">
                              <span class="glyphicon glyphicon-pencil"></span></a></td>
                       </tr>

                   @endforeach

                    </tbody>
                </table>

              <div> {{ $table->links() }} </div>


            </div>

        </div><!--Second Row Div End-->

    </div><!--Container-Fluid Div End-->

@endsection