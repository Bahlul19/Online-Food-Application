@extends('layouts.usermasterPage')

@section('title')
    SignUp
@endsection

@section('content')
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">SignUp</li>
		</ol>
	</div>
	<!-- //breadcrumb -->

    @include('onlineUser.signup')

    

@endsection