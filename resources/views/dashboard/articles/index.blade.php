@extends('template.main')
@section('content')
@section('title', 'Artículos')
<div class="bc-dashboard  no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 dashboard">
            
         <div class="row mensaje_data">
         @include('flash::message')
         @include('template.partials.erros')
         </div>

         <h3>Articulos</h3>

         
         
         </div>
      </div>
   </div>
</div>
@endsection

























