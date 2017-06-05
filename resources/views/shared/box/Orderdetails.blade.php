@extends('layouts.masterPage')
@section('title')
    FoodItem Page Edit
@endsection

@section('content')

    <div class="container-fluid">
        
        <div class="col-md-6">


            <form action="" method="get" enctype="multipart/form-data"><!--Form Start-->

                {{ csrf_field() }}<!-- {{action('FoodItemController@getFoodItemEditSave')}}-->



                <div class="input-group has-warning has-feedback">

                    <span class="input-group-addon" id="basic-addon1">Payment:</span>

                    <input type="text" name="payment" class="form-control" value="">

                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                </div>

                <br/>

                <div class="input-group has-warning has-feedback">

                    <span class="input-group-addon" id="basic-addon1">Address:</span>

                    <input type="text" name="customerAddress" class="form-control" value="">

                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                </div>
                <br/>


                <div class="input-group has-warning has-feedback">

                    <span class="input-group-addon" id="basic-addon1">Mobile:</span>

                    <input type="text" name="customerNumber" class="form-control" value="">

                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                </div>
                <br/>



                <div class="input-group has-warning has-feedback">

                    <span class="input-group-addon" id="basic-addon1">Massage:</span>

                    <input type="text" name="customerMessage" class="form-control" value="">

                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>

                </div>

                <br/>

            </form>
                  <!--food items-->

            <div class="col-md-12" >
                <table class="table table-bordered table-striped ">
                    <thead >
                    
                        <tr>
                            <th>FoodName</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i=0; ?>
                    @foreach(table as row)
                        <tr>
                            <td>{{row->foodName}}</td>
                            <td>{{$row->quantitys}}</td>   
                            <td>{{$row->price * $row->quantitys}}</td>
                        </tr>
                    <?php 
                    $value = $row->price * $row->quantitys;
                    $i+=$value;
                    ?>
                        @endforeach
                            <td colspan="2" style="text-align: right;">Total</td>
                            <td>{{$i}}</td>
                    </tbody>    
                </table>
            </div>
            <!--food items-->
            <button type="button" class="btn btn-default pull-left" >Back</button
        </div>
    </div>
</div>

@endsection