@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Pruebaespecial</h1>
            </div>
        </div>

        @include('common.errors')

        <div class="row">
            {!! Form::model($pruebaespecial, ['route' => ['pruebaespecials.update', $pruebaespecial->id], 'method' => 'patch']) !!}

            @include('pruebaespecials.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection