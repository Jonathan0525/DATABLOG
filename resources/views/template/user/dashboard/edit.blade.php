@extends('template.main')
@section('content')
@section('title', 'DashBoard')
<div class="bc-dashboard  no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 dashboard">
            <div class="row">
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
                        <div class="row">
                           <form class="form-horizontal myform" role="form" method="PUT" route="{{ url('dashboard.update') }}">
                              {{ csrf_field() }}
                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                 <!--<label for="name" class="col-md-4 control-label">Name</label>-->
                                 <div class="col-md-12">
                                    <input id="name" placeholder="Nombre" type="text" class="form-control myinput" name="name" value="{{ Auth::user()->name }}" required autofocus>
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
                                    <input id="email" placeholder="Correo Electrónico" type="email" class="form-control myinput" name="email" value="{{ Auth::user()->email }}" required>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                 </div>
                              </div>
                              <!--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                
                                 <div class="col-md-12">
                                    <input id="password" placeholder="Contraseña" type="password" class="form-control myinput" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                 </div>
                              </div>-->
                              <div class="form-group">
                                 <div class="col-md-12 form-group">
                                    <button type="submit" class="form-control mysubmit">
                                    GUARDAR CAMBIOS
                                    </button>
                                 </div>
                              </div>
                           </form>
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