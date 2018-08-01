@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')
    <body  style="background-color:#F5F5F5;padding-top: 100px">
    <div class="container">
        {!! Charts::styles() !!}
        <div class="app" style="width:100%;height: 250px">
            <center>
                {!! $chart->html() !!}
            </center>
        </div>
        <!-- End Of Main Application -->
        {!! Charts::scripts() !!}
        {!! $chart->script() !!}
    </div>
@endsection
