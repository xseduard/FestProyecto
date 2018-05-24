@extends('layoutsweb.app')

@section('customcss')
@endsection

@section('head')
  @include('layoutsweb.header')
  <div class="relative">
<!-- menu transparente -->
<!-- <div class="relative indent-header"> -->
  @include('revolutionsliders.revo_blog2')
  </div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Inicio de repositorio</div>

                <div class="panel-body">
                    Hola!, {{ auth()->user()->nombres }} {{ auth()->user()->apellidos }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customjs')
 @include('revolutionsliders.script_banner')
@endsection
