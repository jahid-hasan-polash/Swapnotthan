@extends('layouts.userDefaultLogged')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    {!! Form::open(array('route' => 'user.doEditProfile','method'=>'post','class' => 'signup-page')) !!}

                    	<div class="signup-header">
							<h2 align='center'>Edit Your Profile</h2>
						</div>
						<hr>
						<!--First Name and last Name -->
						{!! Form::text('name', $user->name , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Name *')) !!}

						<!-- Mothers name -->
						{!! Form::text('mother', $user->detail->mothers_name , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Mothers name *')) !!}

						<!-- Fathers name -->
						{!! Form::text('father', $user->detail->fathers_name , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Fathers name *')) !!}

						<!-- Address -->
						{!! Form::text('present_address', $user->detail->present_address , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Present Address *')) !!}

						<!-- Phone No-->
						{!! Form::text('mobile_number', $user->detail->mobile_number , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Mobile No *')) !!}

						<!-- Department -->
						<label>Department</label>
						{!! Form::select('dept', $depts, $user->detail->department_id, array('class' => 'form-control margin-bottom-20', 'required')) !!}

						<!-- Registration no -->
						{!! Form::text('reg_no', $user->reg_no , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Registration No *')) !!}
						
						<!-- Blood Group -->
						<label>Blood Group</label>
						{!! Form::select('bl_group', $bloodGroups , $user->detail->bl_group_id, array('class' => 'form-control margin-bottom-20')) !!}

						<!-- Are you capable of donating blood? -->
						<label>Are you capable of donating blood?</label>
						{!! Form::select('bl_donate_capable', $capability, $user->detail->bl_donate_capable, array('class' => 'form-control margin-bottom-20')) !!}

						<!-- email -->
						{!! Form::text('email', $user->email , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Email *')) !!}
						
						<!-- Password -->
						{!! Form::text('password', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Password *')) !!}						

						<!-- Extra curricular activities -->
						{!! Form::textarea('ex_curr_activities', $user->detail->ex_curr_activities, array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Extra curricular activities')) !!}

						<!-- Why do you want to be a part of Swapnotthan? -->
						{!! Form::textarea('why_to_be_swapnotthanian', $user->detail->why_to_be_swapnotthanian, array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Why do you want to be a part of Swapnotthan?')) !!}

						<!-- Which sector do you want to work in? -->
						{!! Form::textarea('sector_to_work_in', $user->detail->sector_to_work_in, array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Which sector do you want to work in?')) !!}

						<div class="text-center">
							{!! Form::submit('Done', array('class' => 'btn btn-primary')) !!}
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

