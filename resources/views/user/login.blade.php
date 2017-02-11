@extends('layouts.userDefault')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    {!! Form::open(array('route' => 'user.doLogin', 'method' => 'post','class' => 'signup-page')) !!}

                    	<div class="signup-header">
							<h2 align='center'>Log In</h2>
						</div>
						<hr>
						
						<!-- Username -->
						{!! Form::text('email', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Reg No or Email')) !!}

						<!-- Password -->
						{!! Form::text('password', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Password')) !!}

						

						<div class="text-center">
							{!! Form::submit('Log In', array('class' => 'btn btn-primary')) !!}
						</div>

					<!-- Form close -->
                    {!! Form::close() !!}
                </div>
        </div>
    </div>
@stop

@section('script')

 {!! Html::style('assets/bootstrap-datepicker/css/datepicker.css') !!}
 
 {!! Html::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}


   <script type="text/javascript">
       $(document).ready(function() {
           $("#date").datepicker({
               format: 'yyyy-mm-dd'
           });
           $( "#date" ).datepicker( "setDate", new Date() );

       
       });



   </script>

@stop

