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
                   <a href="{{ route('dashboard.articles.destroy', $article->id) }}" onclick="return confirm('Seguro que deseas eliminar este artículo?')" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
    
   </div>
</div>