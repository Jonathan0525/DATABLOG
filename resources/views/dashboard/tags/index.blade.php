@extends('template.main')
@section('content')
@section('title', 'Tags')
<div class="bc-dashboard  no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 dashboard">
            
         <div class="row mensaje_data">
         @include('flash::message')
         @include('template.partials.erros')
         </div>

         <h3>Tags</h3>

         <table class="table table-striped">
            <thead>
               <th>ID</th>
               <th>Nombre</th>
               <th>Acción</th>
            </thead>
            <tbody>
               @foreach($tags as $tag)
                  <tr>
                     <td>{{ $tag->id }}</td>
                     <td>{{ $tag->name }}</td>
                     <td>

                     <a href="/dashboard/tags/{{ $tag->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                     <a href="{{ route('dashboard.tags.destroy', $tag->id) }}" onclick="return confirm('Seguro que deseas eliminar este tag?')" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>


                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>
        
           {{ $tags->links() }}
         
         </div>
      </div>
   </div>
</div>
@endsection

























