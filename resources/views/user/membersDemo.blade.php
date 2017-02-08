@extends('layouts.userDefault')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th class="text-center">Name</th>
                            <th class="text-center">Reg No</th>
                            <th class="text-center">Phone</th>
                        </thead>
                        <tbody>
                                <tr class="text-center">
                                    <td >Member1</td>
                                    <td >2000000001</td>
                                    <td >01700000001</td>
                                </tr>

                                <tr class="text-center">
                                    <td >Member2</td>
                                    <td >2000000002</td>
                                    <td >01700000002</td>
                                </tr>

                                <tr class="text-center">
                                    <td >Member3</td>
                                    <td >2000000003</td>
                                    <td >01700000003</td>
                                </tr>

                                <tr class="text-center">
                                    <td >Member4</td>
                                    <td >2000000004</td>
                                    <td >01700000004</td>
                                </tr>
                        </tbody>
                    </table>
                    
                </div>
        </div>
    </div>

@stop