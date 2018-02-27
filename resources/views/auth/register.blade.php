@extends('template.main')

@section('content')


<div class="bc-usuarios-registrese no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-10 col-lg-8 registrese_form">
            <h1>REGISTRARSE</h1>
            <p>Regístrese en nuestra plataforma para
               tener el acceso completo a los proyectos
            </p>


                    <form class="form-horizontal myform" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <!--<label for="name" class="col-md-4 control-label">Name</label>-->

                            <div class="col-md-12">
                                <input id="name" placeholder="Nombre" type="text" class="form-control myinput" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->

                            <div class="col-md-12">
                                <input id="email" placeholder="Correo Electrónico" type="email" class="form-control myinput" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!--<label for="password" class="col-md-4 control-label">Password</label>-->

                            <div class="col-md-12">
                                <input id="password" placeholder="Contraseña" type="password" class="form-control myinput" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <!--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>-->

                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control myinput" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 form-group">
                                <button type="submit" class="form-control mysubmit">
                                    REGISTRARSE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
