@extends('template.main')
@section('content')
@section('title', 'Crear Categoria')
<div class="bc-dashboard  no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 dashboard">
         	<div class="row mensaje_data">
            @include('flash::message')
			@include('template.partials.erros')
			</div>
               <div class="row form_act">
                  <h3><i class="fas fa-plus-circle"></i> Crear Categoría</h3>
                  {!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'class' => 'myform']) !!}
                  <div class="form-group">
                     {!! Form::text('name', null, ['class' => 'form-control myinput', 'placeholder' => 'Nombre Categoria' ,'required']) !!}
                  </div>
                  <div class="form-group">
                     {!! Form::submit('CREAR CATEGORÍA', ['class' => 'form-control mysubmit']) !!}
                  </div>
                  {!! Form::close() !!}
               </div>
           
         </div>
      </div>
   </div>
</div>
@endsection