@extends('layouts.userDefault')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th class="text-center">Name</th>
                            <th class="text-center">Department</th>
                            <th class="text-center">Designation</th>
                            <th class="text-center">Contacts</th>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                                <tr class="text-center">
                                    <td >{!! $member->user->name !!}</td>
                                    <td >{!! $member->user->detail->department->name !!}</td>
                                    <td >{!! $member->designation->title !!}</td>
                                    <td >{!! $member->user->detail->mobile_number !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

@stop