<div class="tab-content" id="v-pills-tabContent">
   <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      <div class="row header_perfil">
         <div class="col-sm-12 col-md-4 col-lg-4 img_perfil">
            <img src="/img/bg/{{ Auth::user()->photo }}">
            <form class="form_img" action="{{ url('/dashboard/user/img') }}" method="POST" enctype="multipart/form-data">
               {{ csrf_field() }}
               <input type="file" class="" id="" name="photo" required>
               <button type="submit">
               ACTUALIZAR
               </button>
            </form>
         </div>
         <div class="col-sm-12 col-md-8 col-lg-8 info_user_name">
            <h2 class="name_user">{{$user->name}}</h2>
            <h3 class="mail-user">{{$user->email}}</h3>
         </div>
      </div>
      <div class="row form_act">
         <h3><i class="fas fa-user-circle"></i> Actualíza tus datos</h3>
         {!! Form::model($user,['route' => ['user.update', $user->id], 'method' => 'PUT', 'class' => 'myform']) !!}
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
   <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">C</div>
   <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">D</div>
</div>
<script type="application/javascript">
   jQuery('input[type=file]').change(function(){
    var filename = jQuery(this).val().split('\\').pop();
    var idname = jQuery(this).attr('id');
    console.log(jQuery(this));
    console.log(filename);
    console.log(idname);
    jQuery('span.'+idname).next().find('span').html(filename);
   });
</script>