@extends('layouts.userDefault')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    {!! Form::open(array('route' => 'user.getInvolved','method'=>'post','class' => 'signup-page')) !!}

                    	<div class="signup-header">
							<h2 align='center'>Register as a new member</h2>
						</div>
						<hr>
						<!--First Name and last Name -->
						<div class="row">
							<div class="col-sm-6">
								{!! Form::text('firstName', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'First Name *')) !!}

							</div>
							<div class="col-sm-6">
								{!! Form::text('lastName', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Last Name *')) !!}
							</div>
						</div>

						<!-- Mothers name -->
						{!! Form::text('mother', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Mothers name *')) !!}

						<!-- Fathers name -->
						{!! Form::text('father', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Fathers name *')) !!}

						<!-- Address -->
						{!! Form::text('present_address', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Present Address *')) !!}

						<!-- Phone No-->
						{!! Form::text('mobile_number', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Mobile No *')) !!}

						<!-- email -->
						{!! Form::text('email', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Email')) !!}

						<!-- Department -->
						<label>Department</label>
						{!! Form::select('dept', $depts, null, array('class' => 'form-control margin-bottom-20', 'required')) !!}

						<!-- Registration no -->
						{!! Form::text('reg_no', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Registration No *')) !!}
						
						<!-- Password -->
						{!! Form::text('password', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Password *')) !!}						

						<!-- Are you capable of donating blood? -->
						<label>Are you capable of donating blood?</label>
						{!! Form::select('bl_donate_capable', <!-- there should be a list--> , null, array('class' => 'form-control margin-bottom-20')) !!}

						<!-- Blood Group -->
						{!! Form::select('bl_group', $bloodGroup , null, array('class' => 'form-control margin-bottom-20')) !!}

						<!-- Extra curricular activities -->
						{!! Form:textarea('ex_curr_activities', '', array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Extra curricular activities')) !!}

						<!-- Why do you want to be a part of Swapnotthan? -->
						{!! Form:textarea('why_to_be_swapnotthanian', '', array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Why do you want to be a part of Swapnotthan?')) !!}

						<!-- Which sector do you want to work in? -->
						{!! Form:textarea('sector_to_work_in', '', array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Which sector do you want to work in?')) !!}

						<div class="text-center">
							{!! Form::submit('Get Started', array('class' => 'btn btn-primary')) !!}
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

