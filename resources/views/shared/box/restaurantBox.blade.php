@section('box')

    <div class="modal fade in" id="RestaurantBox" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">New Area Entry</h4>
                </div>

                <form action="{{action('RestaurantController@getRestaurantSave')}}" method="get" enctype="multipart/form-data"><!--Form Start-->

                    {{ csrf_field() }}

                    <div class="modal-body">


                     <!--Select is use for to get primary kew of Area-->

                          <select name="areaID" class="form-control">

                              @foreach($area as $row)
                                  <option value="{{$row->areaID}}">{{$row->areaName}}</option>
                              @endforeach

                          </select>



                        <br/>


                        <div class="input-group has-warning has-feedback">

                            <span class="input-group-addon" id="basic-addon1">Restaurant Name:</span>

                            <input type="text" name="restaurantName" id="Restaurant" class="form-control" placeholder="Enter Restaurant Name" required>

                            <span class="glyphicon glyphicon-king form-control-feedback"></span>

                        </div>
                        <p class="color" id="RestaurantUnderShow"></p>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>

                </form><!--Form END-->


            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


@endsection