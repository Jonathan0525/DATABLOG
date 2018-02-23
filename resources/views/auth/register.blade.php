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
