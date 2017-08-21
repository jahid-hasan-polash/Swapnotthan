@extends('layouts.userDefault')
@section('content')
	<div id="content" class="container">
			<div class="row margin-vert-30">
				<!-- Main Column -->
				@foreach($sectors as $sector)
				<div class="col-md-12">
					
					<h2 class="text-center" style="margin-bottom: 10px;"><strong>
						{!! $sector->title !!}
					</strong></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<!-- Nayeem make this image look good -->
							<img class="img-responsive" src="{{ asset($sector->sectorImage->first()->image->image_title) }}" style="border-radius: 20px;"> 
						</div>
						<div class="col-md-10 col-md-offset-1 margin-bottom-10" style="margin-top: 30px; ">
							
							<div class="clearfix"></div>
							
							<p>{!! $sector->description !!}</p>
						</div>
					</div>
				</div>
				<hr>
				@endforeach
				<!-- End Main Column -->
			</div>
		</div>
@stop