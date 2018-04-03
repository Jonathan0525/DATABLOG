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

                     <a class="nav-link option_dash" href="/dashboard/user/"  aria-selected="false">BIENVENIDO</a>
                     <a class="nav-link option_dash" href="/dashboard/user/{{ Auth::user()->id }}/edit"  aria-selected="false">DATOS DE USUARIO</a>
                     <a class="nav-link active option_dash" href="/dashboard/user/articles/{{ Auth::user()->id }}" aria-selected="false">MIS PROYECTOS</a>
                     <a class="nav-link option_dash" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">PROYECTOS SEGUIDOS</a>

                  </div>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-9">
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


                  <table class="table table-striped">
            <thead>
               <th>Nombre Articulo</th>
               <th>Categoria</th>
               <th>Tags</th>
               <th>Acción</th>
               
            </thead>
            <tbody>                     
               @foreach($article_id as $article)
                  <tr>
                     <td>{{ $article->title}}</td>
                     <td>{{ $article->category->name }}</td>
                     <td>
                     @foreach($article->tags as $tag)
                         {{ $tag->name }}
                     @endforeach
                     </td>
                     <td>

                     <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                     <a href="" onclick="return confirm('Seguro que deseas eliminar este tag?')" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>


                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>
        
           {{ $article_id->links() }}

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























