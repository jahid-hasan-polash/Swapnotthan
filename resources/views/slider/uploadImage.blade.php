@extends('layouts.default')
    @section('content')
        @include('includes.alert')
        <h1>Change Slider Image:</h1>
        <div class="container text-right">
        	<a class="btn btn-success log-out" href="{{route('dashboard')}}">Admin Page</a>
            <a class="btn btn-danger log-out" href="{{route('logout')}}">Log Out</a>
        </div>

        <style type="text/css">
            .title_text{
               width: 30vh;font-size: 16px;border-color: #F1F29F; 
            }
        </style>
        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

        <div class="container" style="padding-top: 5vh">
         {!! Form::open(['action'=>'AdminController@storeImage', 'files'=>true]) !!}
             
                       <label style="font-size: 16px;">Image Title</label><br>
                       {!! Form::text('imageTitle', null, ['class'=>'form-control title_text']) !!}
                       
                   <br>

                   <br>

                   <div class="form-group">
                       <label style="font-size: 17px; padding-bottom: 10px;">Choose an image</label><br>
                       {!! Form::file('image') !!}
                   </div>
                   <br>

                   <input type="hidden" name="id" value="{{$data->id}}">

                   <p style="margin-top: 15px;">
                       <span><input type="submit" class="btn btn-success" value="Save" style="font-size: 14px;"></span>
                   </p>

        {!! Form::close() !!}
        </div>

        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
@stop