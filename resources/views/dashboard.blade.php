@extends('layouts.default')
    @section('content')
        @include('includes.alert')
        <h1>Welcome to swapnotthan admin panel :</h1>
        <div class="container">
        <style type="text/css">
        	.row{
        		padding-top: 50px;
        	}
        	.btn{
        		margin: 10px;
        		border-radius: 20px;
        		padding: 10px;
        		padding-left: 25px;
        		padding-right: 25px;
        	}
        	.log-out{
        		position: absolute;
        		top: 20px;
        		right: 70px;
        	}
        </style>
        	<div class="row">
        		<ol class="" style="font-size: 30px;">
        			<li><a class="btn btn-success" href="{{route('news')}}">Create/Update News Panel</a></li>
        			<li><a class="btn btn-success" href="{{route('editMission','1')}}">Edit Mission</a></li>
        			<li><a class="btn btn-success" href="{{route('changeSlider')}}">Change Slider Images</a></li>
                    <li><a class="btn btn-success" href="">Create/Update Notice Panel</a></li>
        			<li><a class="btn btn-success" href="{{route('updateGallery')}}">Update Gallery Images</a></li>
        		</ol>
        	</div>
        	<a class="btn btn-danger log-out" href="{{route('logout')}}">Log Out</a>
        </div>
@stop