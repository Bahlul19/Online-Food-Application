<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-left">
						<p>Food is love, Love is food</p>
					</div>
					<div class="w3ls-header-right">
						<ul> 
							<li class="head-dpdn">
								<i class="fa fa-phone" aria-hidden="true"></i>For Order Call Us: +880 1731 691 994
							</li>
							<!--
							<li class="head-dpdn">
								<a href="{{url('userlogin')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
							</li> 
							<li class="head-dpdn">
								<a href="{{url('signup')}}"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
							</li>
							-->
							<li class="head-dpdn">
								<a href="{{url('help')}}"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->    
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1><a href="{{url('userhome')}}">Our Foods<span>The Best Food Collection In Town</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="{{url('userhome')}}" class="active">Home</a></li>	
								<!-- Mega Menu -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Foods <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Food List</h6>
													<li><a href="{{url('city')}}">Food List</a></li>
													<!--
													<li><a href="{{url('city')}}">Dhaka</a></li> 
													<li><a href="{{url('city')}}">Khulna</a></li> 
													<li><a href="{{url('city')}}">Rajshahi</a></li>
													-->
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li><a href="{{url('userabout')}}">About</a></li> 
								<li><a href="{{url('contact')}}">Contact Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>
		<!-- //header-end --> 
    
		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
        <div class="banner_text_main">
          <h2>Delicious food from the <br> <span>Best Restaurants For you</span></h2>
          <div class="agileits_search">
            <form action="{{action('usercityPage@getIndex')}}" method="get" enctype="multipart/form-data">
              <input name="Search" type="text" placeholder="Enter Your Food Name" required="">
			 <input type="submit" value="Search">
            </form>
			</div>
          </div> 
        </div>
			</div>
		</div>
    
	</div>
	<!-- //banner --> 
