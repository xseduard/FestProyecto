@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Pruebaespecials</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('pruebaespecials.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')
        

        <div class="clearfix"></div>

        @if($pruebaespecials->isEmpty())
            <div class="well text-center">No Pruebaespecials found.</div>
        @else
            @include('pruebaespecials.table')

        @endif
        
    </div>
@endsection