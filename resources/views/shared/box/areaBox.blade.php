@section('box')

    <div class="modal fade in" id="AreaBox" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">New Area Entry</h4>
                </div>

                <form action="{{action('AreaController@getAreaSave')}}" method="get" enctype="multipart/form-data"><!--Form Start-->

                    {{ csrf_field() }}

                <div class="modal-body">

                    <div class="input-group has-warning has-feedback">

                        <span class="input-group-addon" id="basic-addon1">Area Name:</span>

                        <input type="text" name="areaName" class="form-control" placeholder="Enter Area Name" id="Area" required>

                        <span class="glyphicon glyphicon-tower form-control-feedback"></span>
                        {{--<p style="color:red" id="AreaUnderShow"></p>--}}

                    </div>


                    <p class="color" id="AreaUnderShow"></p>



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