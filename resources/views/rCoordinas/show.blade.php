@extends('layouts.app')

@section('content')

<div class="col-md-12">
<div class="box box-warning">
                <div class="box-header with-border">
                  <h2 class="box-title">Detalles rCoordinas</h2>
                  <a href="{!! route('rCoordinas.index') !!}" class="btn btn-default pull-right"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Atrás</a>
                </div><!-- /.box-header -->

    @include('rCoordinas.show_fields')
</div>
</div>
@endsection
