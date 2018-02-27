@extends('template.main')
@section('title', 'Crear Usuario')
@section('content')
<div class="bc-usuarios-registrese no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-10 col-lg-8 registrese_form">
            <h1>REGISTRARSE</h1>
            <p>Regístrese en nuestra plataforma para
               tener el acceso completo a los proyectos
            </p>
            {!! Form::open(['route' => 'register', 'method' => 'post', 'class' => 'myform']) !!}
            <div class="form-group">
               {!! Form::text('name', null, ['class' => 'form-control myinput', 'placeholder' => 'Nombre Completo' ,'required']) !!}
            </div>
            <div class="form-group">
               {!! Form::email('email', null, ['class' => 'form-control myinput', 'placeholder' => 'CORREO ELECTRÓNICO' ,'required']) !!}
            </div>
            <div class="form-group">
               {!! Form::password('password', ['class' => 'form-control myinput', 'placeholder' => 'CONTRASEÑA' ,'required']) !!}
            </div>
            <div class="form-group">
               {!! Form::submit('REGISTRARSE', ['class' => 'form-control mysubmit']) !!}
            </div>

            {!! Form::close() !!}

            <p>¿YA TIENES UNA CUENTA? - <a href="">ACCEDER</a></p>

            <span></span>

            <a href="" class="facebook"><i class="fab fa-facebook-f"></i> INGRESAR CON FACEBOOK</a>


         </div>
      </div>
   </div>
</div>
@endsection


<!--

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


-->
