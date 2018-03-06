@extends('layoutsweb.appauth')

@section('content')

 
      
        <div class="boxed bg-gray pt-100 pb-80">     
          <div class="container">

          <form class="text-xs-center" role="form" method="POST" action="{{ url('/login') }}">
                <div class="row">
                   {!! csrf_field() !!}
                  <div class="col-md-4 col-sm-6">
                    <div class="input-with-icon mb-20">
                      <span aria-hidden="true" class="icon icon_profile"></span>
                      <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                      <input class="form-control-purple" type="text" name="cedula" placeholder="Usuario" >
                      @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                       @endif
                    </div>
                  </div>
                </div>
                  
                  <div class="col-md-3 col-sm-6">
                    <div class="input-with-icon mb-20">
                      <span aria-hidden="true" class="icon icon_mail"></span>
                      <input class="form-control-purple" type="email" name="email" placeholder="Email" >
                    </div>
                  </div>
                  
                  <div class="col-md-4 col-sm-6">
                    <div class="input-with-icon mb-20">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span aria-hidden="true" class="icon icon_lock-open"></span>
                        <input class="form-control-purple" type="password" name="password" placeholder="Contraseña" >
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                </div>
                  <div class="col-md-4 col-sm-6 mb-20">
                    <button class="button medium purple full-rounded btn-block" type="submit">Conectarse</button>
                     <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recuerdame
                                    </label>
                                </div>
                            </div>
                        </div>
                  </div>
                      @include('common.errors')
                  
                </div>
              </form>

          </div>
        </div>


@endsection