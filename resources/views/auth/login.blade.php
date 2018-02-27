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



                    <form class="form-horizontal myform" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->

                            <div class="col-md-12">
                                <input id="email" placeholder="Correo Electrónico" type="email" class="form-control myinput" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Recuerdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 form-group">
                                <button type="submit" class="form-control mysubmit">
                                    INGRESAR
                                </button>

                                
                            </div>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
