@extends('layouts.usermasterPage')

@section('title')
    Privacy
@endsection

@section('content')
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">PrivacyPolicy</li>
		</ol>
	</div>
	<!-- //breadcrumb -->

    @include('onlineUser.privacy')

    

@endsection