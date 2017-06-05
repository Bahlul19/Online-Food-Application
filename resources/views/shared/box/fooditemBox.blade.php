@section('box')

    <div class="modal fade in" id="FoodItemBox" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">New Food Item Entry</h4>
                </div>

                <form action="{{action('FoodItemController@getFoodItemSave')}}" method="post" enctype="multipart/form-data"><!--Form Start-->

                    {{ csrf_field() }}

                    <div class="modal-body">

                        <select name="restaurantID" class="form-control"><!--Restaurant ID-->

                            @foreach($restaurant as $row)

                                <option value="{{$row->restaurantID}}">{{$row->restaurantName}}</option>

                            @endforeach

                        </select>
                        <br/>

                        <div class="input-group has-warning has-feedback"><!--Restaurant Name-->

                            <span class="input-group-addon" id="basic-addon1">Food Name:</span>

                            <input type="text" name="foodName" id="FoodItem" class="form-control" placeholder="Enter Food Name" required>

                            <span class="glyphicon glyphicon-certificate form-control-feedback"></span>

                        </div>

                        <p class="color" id="FoodItemUnderShow"></p>

                        <br/>

                        <div class="input-group has-warning has-feedback"><!--Restaurant Description-->

                            <span class="input-group-addon" id="basic-addon1">Food Description:</span>

                            <input type="text" name="foodDescription" id="Description" class="form-control" placeholder="Enter Food Description" required>

                            <span class="glyphicon glyphicon-text-width form-control-feedback"></span>

                        </div>

                        <p class="color" id="FoodItemUnderShow2"></p>

                        <br/>


                        <div class="input-group has-warning has-feedback"><!--Food price-->

                            <span class="input-group-addon" id="basic-addon1">Food Price:</span>

                            <input type="text" name="price" id="Price" class="form-control" placeholder="Enter Food Price" required>

                            <span class="glyphicon glyphicon-usd form-control-feedback"></span>

                        </div>

                        <p class="color" id="FoodItemUnderShow3"></p>

                        <br/>


                        <div class="input-group has-warning has-feedback"><!--foodTag-->

                            <span class="input-group-addon" id="basic-addon1">Food Tag:</span>

                            <input type="text" name="foodTag" id="Tag" class="form-control" placeholder="Enter Food tag" required>

                            <span class="glyphicon glyphicon-tag form-control-feedback"></span>

                        </div>

                        <p class="color" id="FoodItemUnderShow4"></p>

                        <br/>
                        <div>
                            <p style="">Item Image</p>
                            <input type="file" name="foodImg" accept="image/gif, image/jpeg, image/png">
                        </div>


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