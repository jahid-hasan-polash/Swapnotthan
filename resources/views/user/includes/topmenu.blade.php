<div id="pre_header" class="visible-lg"></div>
	<div id="header" class="container" style="padding-top:10px">
		<div class="row">
			<!-- Logo -->
			<div class="logo" >
				<a href="{!! URL::route('index') !!}" title="Swapnotthan">
					<!-- <img src="asset/img/logo.png" alt="Logo" /> -->
					{!! Html::image("asset/img/swapnotthan.png",'',array('width'=>'280px')) !!}

				</a>
			</div>
			<!-- End Logo -->
			<!-- Top Menu -->
			<div class="col-md-12 margin-top-30">

				<div id="hornav" class="pull-right visible-lg">
					<ul class="nav navbar-nav">
						<li><a href="{!! URL::route('index') !!}" >Home</a></li>
						<li><a href="{!! URL::route('whatWeDo') !!}" >What We Do</a></li>
						<li><a href="{!! URL::route('executive') !!}">Executives</a></li>
						
						<li><span>Get Involved</span>
							<ul>
								<li><a href="{!! URL::route('register') !!}">As a Member</a></li>
								<li><a href="#">Donate</a></li>
							</ul>
						</li>
						<li><a href="{!! URL::route('contact') !!}" >Contact Us</a></li>
						<li><a href="#">Login</a></li>
						<!--<li><a href="http://www.swapnotthan.org/sweccha/" class="btn btn-success">Sweccha</a></li>-->
					</ul>
				</div>
			</div>
				<div class="clear"></div>
				<!-- End Top Menu -->
		</div>
	</div>
