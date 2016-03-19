@extends('layouts.app')

@section('content')

<div class="col-md-12">
<div class="box box-warning">
                <div class="box-header with-border">
                  <h2 class="box-title">Detalles academicos</h2>
                </div><!-- /.box-header -->

    @include('academicos.show_fields')
</div>
</div>
@endsection
