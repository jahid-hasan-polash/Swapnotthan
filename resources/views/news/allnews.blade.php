@extends('layouts.default')
    @section('content')
        @include('includes.alert')
        <h1>Swapnotthan News:</h1>
        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

        <div class="container" style="padding-top: 5vh">
            <div class="row">
                <div class="col-md-10">
                    

                    <table class="table">
                    <tr>
                        <td>SL</td>
                        <td>News Title</td>
                        <td>Description</td>
                        <td>Action</td>
                    </tr>

                    <?php $i=1; ?>
                    @foreach($data as $row)
                    <tr>
                    <td>{!! $i++ !!}</td>
                    <td>{!! $row->title !!}</td>
                    <td>{!! $row->description !!}</td>
                    <td>
                        <a href="{!! route('getEditNews',$row->id) !!}" class="btn btn-warning">Edit</a>
                        
                        <form action="{!! route('deleteNews', $row->id) !!}" method="POST" style="display: inline" onsubmit="
                        if(confirm('Delete!Are you sure?')) { return true } else {return false};" >
                         <input type="hidden" name="_token" value="{!!  csrf_token() !!}">
                         <button type="submit" class="btn btn-danger">Delete</button>

                        </form>

                        
                    </td>
                    </tr>
                    @endforeach
                        
                    </table>

                </div>
            </div>
            <!-- <form action="{!! route('createNews')!!}" method="POST" class="form-inline" style="padding-top: 5vh;">
                <input type="hidden" name="_token" value="{!! csrf_token()!!}">

                <h2 style="padding-bottom: 30px;">Create Latest News:</h2>
                <p>
                    <input type="text" class="form-control" name="newsTitle" placeholder="Enter a title for the news." style="font-size: 18px;border-color: #F1F29F">
                </p>

                <textarea class="form-control" rows="6" name="newsDescription" style="min-width: 100vh;font-size: 18px;border-color: #F1F29F;" placeholder="Enter the description of the news." ></textarea>
                <br>
                <br>
                <br>
                <div class="form-group">
                       <label style="font-size: 17px; padding-bottom: 10px;">Choose an image</label><br>
                       <input type="file" name="image">
                </div>
                <br>
                <br>
                <br>
                <p style="margin: 10px;">
                    <span><input type="submit" class="btn btn-success" value="Save" style="font-size: 18px;"></span>
                </p>
                    
            </form> -->



            {!! Form::open(['action'=>'AdminController@createNews', 'files'=>true,'class' => 'form-inline']) !!}
                <input type="hidden" name="_token" value="{!! csrf_token()!!}">

                <h2 style="padding-bottom: 30px;">Create Latest News:</h2>
                <p>
                    <input type="text" class="form-control" name="newsTitle" placeholder="Enter a title for the news." style="font-size: 18px;border-color: #F1F29F">
                </p>

                <textarea class="form-control" rows="6" name="newsDescription" style="min-width: 100vh;font-size: 18px;border-color: #F1F29F;" placeholder="Enter the description of the news." ></textarea>
                <br>
                <br>
                <br>
                <div class="form-group">
                   <label style="font-size: 17px; padding-bottom: 10px;">Choose an image</label><br>
                   {!! Form::file('image') !!}
                </div>
                <br>
                <br>
                <br>
                <p style="margin: 10px;">
                    <span><input type="submit" class="btn btn-success" value="Save" style="font-size: 18px;"></span>
                </p>
            {!! Form::close() !!}
        </div>

        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
@stop