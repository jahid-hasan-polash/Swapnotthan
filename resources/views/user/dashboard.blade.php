@extends('layouts.userDefaultLogged')
@section('content')
	<div id="content" class="container">
			<div class="row margin-vert-30">
				<!-- Main Column -->
				<h2 class="text-center" style="margin-bottom: 5%; padding-bottom: 1%"><strong> Your Profile</strong></h2>
				<div class="col-md-12"  style="margin: 20px;">
					<h3><span style="padding-right: 12%;">Name</span>:<span style="padding: 2px;border-radius: 8px; margin-left: 12px;">{{ $user->name }}</span></h3>
				</div>

				<div class="col-md-12" style="margin: 20px;">
					<h3><span style="padding-right: 5%;">Father's Name</span>:<span style="padding: 2px;border-radius: 8px; margin-left: 12px;">{!! $user->detail->fathers_name !!}</span></h3>
				</div>

				<div class="col-md-12" style="margin: 20px;">
					<h3><span style="padding-right: 5%;">Mother's Name</span>:<span style="padding: 2px;border-radius: 8px; margin-left: 12px;">{!! $user->detail->mothers_name !!}</span></h3>
				</div>

				<div class="col-md-12" style="margin: 20px;">
					<h3><span style="padding-right: 5%;">Email</span>:<span style="padding: 2px;border-radius: 8px; margin-left: 12px;">{!! $user->email !!}</span></h3>
				</div>

				<div class="col-md-12" style="margin: 20px;">
					<h3><span style="padding-right: 5%;">Address</span>:<span style="padding: 2px;border-radius: 8px; margin-left: 12px;">{!! $user->detail->present_address !!}</span></h3>
				</div>

				<div class="col-md-12" style="margin: 20px;">
					<h3><span style="padding-right: 5%;">Phone Number</span>:<span style="padding: 2px;border-radius: 8px; margin-left: 12px;">{!! $user->detail->mobile_number !!}</span></h3>
				</div>

				<div class="col-md-12" style="margin: 20px;">
					<h3><span style="padding-right: 5%;">Department</span>:<span style="padding: 2px;border-radius: 8px; margin-left: 12px;">{!! $user->detail->department->name !!}</span></h3>
				</div>
				

				<!-- End Main Column -->
			</div>
		</div>
@stop