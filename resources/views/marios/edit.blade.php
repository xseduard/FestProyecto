@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Editar Mario</h1>
            </div>
        </div>

        @include('common.errors')

        <div class="row">
            {!! Form::model($mario, ['route' => ['marios.update', $mario->id], 'method' => 'patch']) !!}

            @include('marios.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection