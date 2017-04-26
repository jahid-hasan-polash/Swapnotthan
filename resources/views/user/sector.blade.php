@extends('layouts.userDefault')
@section('content')
	<div id="content" class="container">
			<div class="row margin-vert-30">

				<div class="col-md-12">
					
					<h2 class="text-center" style="margin-bottom: 10px;"><strong>
						{!! $sector->title !!}
					</strong></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<!-- Nayeem make this image look good -->
							<img class="img-responsive" src="\img\SectorImages\{!! $image->image_title !!}" style="border-radius: 20px;"> 
						</div>
						<div class="col-md-10 col-md-offset-1 margin-bottom-10" style="margin-top: 30px; ">
							
							<div class="clearfix"></div>
							
							<p>{!! $sector->description !!}</p>
						</div>
					</div>
				</div>
			</div>
					<hr>
					
					<div class="container">
						<h2 class="text-center margin-top-10" style="color: #3366ff;font-size: 25px;">ALONE WE CAN DO SO LITTLE; BUT TOGETHER WE CAN DO SO MUCH</h2>
						<p class="text-center margin-bottom-30">Join us in the way of helping and building a better future</p>
					</div>
	</div>
@stop