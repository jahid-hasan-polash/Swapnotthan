@extends('layouts.default')
    @section('content')
        @include('includes.alert')
        <h1>Mission Edit Page:</h1>
        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

        <div class="container" style="">
            <form action="{!! route('updateMission',$data->id) !!}" method="POST" class="form-inline" style="padding-top: 5vh;">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <h2>Our Mission:</h2><br>
                <textarea class="form-control" rows="9" name="missionDescription" style="min-width: 100%;font-size: 18px;border-color: #F1F29F;" >{!! $data->description !!}</textarea>

                <p class="text-right" style="margin-top: 20px;">
                    <span><input type="submit" class="btn btn-success" value="Update" style="font-size: 18px;"></span>
                </p>
                    
            </form>
        </div>

        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
@stop