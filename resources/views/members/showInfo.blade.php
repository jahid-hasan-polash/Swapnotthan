@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    <h2>{{ $title }}</h2>
                </header>
                <div class="panel-body">
                    <h4>Name: {!! $user->name !!}</h4>
                    <h4>Fathers Name: {!! $user->detail->fathers_name !!}</h4>
                    <h4>Mothers Name: {!! $user->detail->mothers_name !!}</h4>
                    <h4>Email: {!! $user->email !!}</h4>
                    <h4>Phone No: {!! $user->detail->mobile_number !!}</h4>
                    <h4>Department: {!! $user->detail->department->name !!}</h4>
                    <h4>Blood Group: {!! $user->detail->bloodGroup->name !!}</h4>
                    <a class="btn btn-success" href="{!! route('members.changePassword',$user->id) !!}">Change His/Her Password</a>
                    <a class="btn btn-danger" href="{!! route('members.makeAdmin',$user->id) !!}">Make Admin</a>
                     
                </div>
            </section>
        </div>
    </div>
@stop