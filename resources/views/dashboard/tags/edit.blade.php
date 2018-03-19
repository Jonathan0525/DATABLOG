@extends('template.main')
@section('content')
@section('title', 'Editar Tag - ' . $tag->name)
<div class="bc-dashboard  no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 dashboard">
            <div class="row mensaje_data">
            @include('flash::message')
            @include('template.partials.erros')
         </div>
               <div class="row form_act">
                  <h3><i class="fas fa-edit"></i> Editar Tag</h3>
                  {!! Form::open(['route' => ['tags.update', $tag], 'method' => 'PUT', 'class' => 'myform']) !!}
                  <div class="form-group">
                     {!! Form::text('name', $tag->name, ['class' => 'form-control myinput', 'placeholder' => 'Nombre Tag' ,'required']) !!}
                  </div>
                  <div class="form-group">
                     {!! Form::submit('EDITAR TAG', ['class' => 'form-control mysubmit']) !!}
                  </div>
                  {!! Form::close() !!}
               </div>
           
         </div>
      </div>
   </div>
</div>
@endsection