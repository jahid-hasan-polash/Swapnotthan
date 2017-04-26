@extends('layouts.userDefault')
@section('content')
	<div id="content" class="container">
			<div class="row margin-vert-30">
				<!-- Main Column -->
				@foreach($sectors as $sector)
				<div class="col-md-12">
					<h2 class="text-center">{!! $sector->title !!}</h2><br>
					<!-- image should be added -->
					<p>{!! $sector->description !!}</p>
					
				</div>
				<hr>
				@endforeach
				<!-- End Main Column -->
			</div>
		</div>
@stop