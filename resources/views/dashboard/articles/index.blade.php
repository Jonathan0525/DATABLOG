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

         <table class="table table-striped">
            <thead>
               <th>ID</th>
               <th>Nombre</th>
               <th>Acción</th>
            </thead>
            <tbody>
               @foreach($articles as $article)
                  <tr>
                     <td>{{ $article->id }}</td>
                     <td>{{ $article->title }}</td>
                     <td>

                     


                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>
        
           {{ $articles->links() }}

         
         
         </div>
      </div>
   </div>
</div>
@endsection

























