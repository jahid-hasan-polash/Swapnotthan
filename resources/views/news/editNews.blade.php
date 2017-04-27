@extends('layouts.default')
    @section('content')
        @include('includes.alert')
        <h1>News Edit Page:</h1>
        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

        <div class="container" style="padding-top: 5vh">
            <form action="{{route('postEditNews',$data->id)}}" method="POST" class="form-inline" style="padding-top: 5vh;">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <p>
                    <label style="font-size: 18px;">News Title</label><br>
                    <textarea class="form-control" rows="1" name="newsTitle" style="min-width: 40vh;font-size: 18px;border-color: #F1F29F;" >{{$data->title}}</textarea>
                </p>
                <label style="font-size: 18px;">News Description</label><br>
                <textarea class="form-control" rows="6" name="newsDescription" style="min-width: 100vh;font-size: 18px;border-color: #F1F29F;" >{{$data->description}}</textarea>

                <p style="margin: 10px;">
                    <span><input type="submit" class="btn btn-success" value="Update" style="font-size: 18px;"></span>
                </p>
                    
            </form>
        </div>

        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
@stop