@extends('layouts.default')
    @section('content')
        @include('includes.alert')
        <h1>Change Gallery Images:</h1>
        <div class="container text-right">
        	<a class="btn btn-success log-out" href="{{route('dashboard')}}">Admin Page</a>
            <a class="btn btn-danger log-out" href="{{route('logout')}}">Log Out</a>
        </div>
        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

        <div class="container" style="margin-top: 40px;">
        	<div class="row">
        	@foreach($data as $row)
        		<div class="col-md-3 text-center">
        			<img class="img-responsive" src="img/gallery/{{$row->image_link}}"; style="margin-left: auto;margin-right: auto;">
        			<a class="btn btn-success" href="{{route('uploadGalleryImage',$row->id)}}" style="margin-top: 25px;">Change Image {{$row->id}}
        			</a>
        		</div>
        	@endforeach
        	</div>
        </div>

        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
@stop