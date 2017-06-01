@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                </header>
                <div class="panel-body">
                    <h3>{!! $member->name !!}</h3>

                    {!! Form::open(array('route' => ['members.doEdit',$member->id], 'class' => 'form-horizontal')) !!}

                    <div class="form-group">
                        {!! Form::label('committee_id', 'Fiscal year', array('class' => 'col-md-2 control-label')) !!}
                        <div class="col-md-4">
                            {!! Form::select('committee_id', $committees, array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('designation', 'Designation/Post', array('class' => 'col-md-2 control-label')) !!}
                        <div class="col-md-4">
                            {!! Form::select('designation', $designations, array('class' => 'form-control')) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>
@stop