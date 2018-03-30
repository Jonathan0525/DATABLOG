@extends('template.main')
@section('title', 'Inicio')
@section('content')
<div class="bc-usuarios-registresev2 no-gutters ">
   <div class="container-fluid" >

   
      <!-- <img src="{{ asset('img/bg/banner.jpg') }}" class="img-fluid">-->
    

</div>
	<div class="container" >

      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 front-home">
            <div class="row justify-content-center">

               <div class="col-sm-12 col-md-10 col-lg-9 row">
                  <div class="titu">
                  <h3>Últimos Articulos</h3>
                  <span class="line"></span>
                  </div>
                  @foreach($articles as $article)
                  
                  <div class="col-sm-12 col-md-4 col-lg-4 ">
                    <a href="{{ route('dashboard.articles.vista', $article->slug) }}">
                     <div class="box_info">
                        @foreach($article->images as $image)
                        <img src="{{ asset('img/articulos/' . $image->name) }}">
                        @endforeach
                        <div class="info">
                           <h2>{{ $article->title }}</h2>
                           <p>{{ $article->user->name }}</p>
                        </div>
                     </div>
                     </a>
                  </div>
                  
                  @endforeach
                  <div class="footer_number">
                     {{ $articles->links() }}
                  </div>
               </div>
               <div class="col-sm-12 col-md-10 col-lg-3 ">
                  @include('dashboard.partials.aside')
                  

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection















