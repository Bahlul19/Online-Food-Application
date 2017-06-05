@extends('layouts.usermasterPage')

@section('title')
    usercareers
@endsection

@section('content')
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Careers</li>
		</ol>
	</div>
	<!-- //breadcrumb -->

    
    @include('onlineUser.careers')

@endsection