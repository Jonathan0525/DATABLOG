@extends('template.main')
@section('content')
@section('title', 'DashBoard')
<div class="bc-dashboard  no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 dashboard">
            <div class="row">
               <!--<a href="dashboard/{{ Auth::user()->id }}/edit">dashboard</a>-->
               <div class="col-sm-12 col-md-12 col-lg-3 btns_dash">
                  <div class="nav flex-column nav-pills btns_dash_in" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                     <a class="nav-link active option_dash" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">DATOS DE USUARIO</a>
                     <a class="nav-link option_dash" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">CAMBIO DE CONTRASEÑA</a>
                     <a class="nav-link option_dash" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">MIS PROYECTOS</a>
                     <a class="nav-link option_dash" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">PROYECTOS SEGUIDOS</a>
                  </div>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-9">
                  <div class="tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row header_perfil">
                           <div class="col-sm-12 col-md-3 col-lg-3">
                              <img src="{{ asset('img/thumb-user.png') }}">
                           </div>
                           <div class="col-sm-12 col-md-9 col-lg-9 info_user_name">
                              <h2 class="name_user">{{ Auth::user()->name }}</h2>
                              <h3 class="mail-user">{{ Auth::user()->email }}</h3>
                           </div>
                        </div>
                        <div class="row form_act">
                           {!! Form::model($user, array('route' => array('dashboard.update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal myform')) !!}
                           <div class="form-group">
                              {!! Form::text('name', $user->name, ['class' => 'form-control myinput', 'placeholder' => 'Nombre Completo' ,'required']) !!}
                           </div>
                           <div class="form-group">
                              {!! Form::email('email', $user->email, ['class' => 'form-control myinput', 'placeholder' => 'CORREO ELECTRÓNICO' ,'required']) !!}
                           </div>
                           <div class="form-group">
                              {!! Form::submit('ACTUALIZAR', ['class' => 'form-control mysubmit']) !!}
                           </div>
                           {!! Form::close() !!}
                        </div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">B</div>
                     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">C</div>
                     <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">D</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection