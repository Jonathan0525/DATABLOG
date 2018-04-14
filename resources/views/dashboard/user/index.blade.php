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

                
                     <a class="nav-link active  option_dash" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">BIENVENIDO</a>

                     <a class="nav-link option_dash" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">DATOS DE USUARIO</a>

                     <a class="nav-link option_dash" id="v-pills-proyectos-tab" data-toggle="pill" href="#v-pills-proyectos" role="tab" aria-controls="v-pills-proyectos" aria-selected="false">MIS PROYECTOS</a>

                     <!--<a class="nav-link  option_dash" href="/dashboard/user/articles/{{ Auth::user()->id }}" aria-selected="false">MIS PROYECTOS</a>-->

                     <a class="nav-link option_dash" id="v-pills--tab" data-toggle="pill" href="#v-pills-messages-tab" role="tab" aria-controls="v-pills-" aria-selected="false">PROYECTOS SEGUIDOS</a>

                    
                  </div>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-9 info-box">
                  <div class="tab-content" id="v-pills-tabContent">

                     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row header_perfil">
                           <div class="col-sm-12 col-md-3 col-lg-3 img_perfil">
                              <img src="/img/bg/{{ Auth::user()->photo }}">
                           </div>
                           <div class="col-sm-12 col-md-9 col-lg-9 info_user_name">
                              <h2 class="name_user">{{ Auth::user()->name }}</h2>
                              <h3 class="mail-user">{{ Auth::user()->email }}</h3>
                           </div>
                        </div>
                        <div class="row mensaje_data">
                           @include('flash::message')
                        </div>
                     </div>

                     <div class="tab-pane fade" id="v-pills-proyectos" role="tabpanel" aria-labelledby="v-pills-proyectos-tab">
                           <div id="proyectos">
                           </div>
                     </div>


                     <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div id="info">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@section('js')
<script type="text/javascript">
   $(document).ready(function(){

         $("#proyectos").load("/dashboard/user/articles/{{ Auth::user()->id }}");
      
         $("#info").load("/dashboard/user/{{ Auth::user()->id }}/edit");
     
   
   });

</script>
@endsection
@endsection