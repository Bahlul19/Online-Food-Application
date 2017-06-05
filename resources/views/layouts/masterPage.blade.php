<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>
        @yield('title')
    </title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/default.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/custom.css')}}" rel="stylesheet">
    @yield('style')
</head>
<body>

<div class="container-fluid display-table">


    <div class="row display-table-row">

        @include('shared.sidebar')

        <div class="col-md-10 col-sm-11 box display-table-cell valign-top">
            @include('shared.header')

            <div class="row">
                <div class="col-md-12">
                    <div class="upbtn">@yield('svbutn')
                    </div>

                    @yield('content')
                </div>
            </div>


            @include('shared.footer')


        </div>

    </div>

</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @yield('box')
        </div>
    </div>
</div>



<script type="text/javascript" src="{{asset('public/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/default.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/custom.js')}}"></script>
@yield('scripts')
</body>
</html>