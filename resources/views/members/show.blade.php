@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                </header>
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th >Name</th>
                            <th class="text-center">Registration No</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                          <tr> 
                            <td>{!! $member->name !!}</td>
                            <td>{!! $member->reg_no !!}</td>
                            <td>{!! $member->email !!}</td>
                            <!-- only if he is the admin -->
                            <td class="text-center">
                                <a class="btn btn-success" href="{!! route('members.edit',$member->id) !!}">Make Executive</a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger" href="{!! route('members.makeAdmin',$member->id) !!}">Make Admin</a>
                            </td>

                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>

            </section>
        </div>
    </div>
@stop