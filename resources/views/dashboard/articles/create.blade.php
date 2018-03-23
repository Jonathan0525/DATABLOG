@extends('template.main')
@section('content')
@section('title', 'Crear Articulo')
<div class="bc-dashboard  no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 dashboard ">
            <div class="row mensaje_data">
               @include('flash::message')
               @include('template.partials.erros')
            </div>
            <div class="row form_act">
               <h3><i class="fas fa-plus-circle"></i> Crear Artículo</h3>
               {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true, 'class' => 'myformeditor']) !!}
               <div class="form-group">
                  {!! Form::label('title', 'Titulo', ['class' => 'titulo_small']) !!}
                  {!! Form::text('title', null, ['class' => 'form-control myinput', 'placeholder' => 'Nombre Artículo' ,'required']) !!}
               </div>
               <div class="form-group">
                  {!! Form::label('category', 'Categoría', ['class' => 'titulo_small']) !!}
                  {!! Form::select('category_id', $categories, null, ['class' => 'form-control myselect select-categories', 'placeholder' => 'Selecciona una categoria', 'required']) !!}
                  
               </div>
               <div class="form-group">
                  {!! Form::label('tag', 'Tag', ['class' => 'titulo_small']) !!}
                  {!! Form::select('tags[]', $tags, null, ['class' => 'form-control myselect select-tags', 'placeholder' => 'Selecciona un maximo de 3 tags' , 'multiple', 'required']) !!}
                  <a href="/dashboard/tags/create" id="btn_crear_tag" class="mini_texto" data-toggle="modal" data-target="#form_tag">Crea un tag</a>
               </div>
               <div class="form-group">
                  {!! Form::label('image', 'Imágen de Artículo', ['class' => 'titulo_small']) !!}
                  <div class="form-group">
                     {!! Form::file('image', ['class' => 'form-control-file', 'required']) !!}
                  </div>
               </div>
               <div class="form-group">
                  {!! Form::label('content', 'Contenido', ['class' => 'titulo_small']) !!}
                  {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'myeditor' ,'placeholder' => 'Escribe...' , 'required']) !!}
               </div>
               <div class="form-group">
                  {!! Form::submit('CREAR ARTÍCULO', ['class' => 'form-control mysubmit' ,'required']) !!}
               </div>
               {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="form_tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear Tag</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            {!! Form::open(['route' => 'tags.store', 'method' => 'POST', 'class' => 'myform']) !!}
            <div class="form-group">
               {!! Form::text('name', null, ['class' => 'form-control myinput', 'placeholder' => 'Nombre Tag' ,'required']) !!}
            </div>
         </div>
         <div class="modal-footer">
            {!! Form::submit('CREAR TAG', ['class' => 'form-control mysubmit']) !!}
         </div>
         {!! Form::close() !!}
      </div>
   </div>
</div>
@section('js');
<script type="text/javascript">
   $('.select-tags').chosen({
      placeholder_text_multiple: "Selecciona un maximo de 3 tags",
      max_selected_options: 4
   });
   
   

   
   $('#myeditor').trumbowyg();


   $('#form_tag').on('shown.bs.modal', function () {
   $('#btn_crear_tag').trigger('focus')
   });
   
   
</script>
@endsection
@endsection