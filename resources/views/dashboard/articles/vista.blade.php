@extends('template.main')
@section('content')
@section('title', 'Article')
<div class="bc-dashboard  no-gutters ">
   <div class="container" >
      <div class="row justify-content-center">
         <div class="col-sm-12 col-md-12 col-lg-12 dashboard my-article">
            <div class="row mensaje_data">
               @include('flash::message')
               @include('template.partials.erros')
            </div>
            <h1>{{ $article->title }}</h1>
            <p><b>Por: </b>{{ $article->user->name }}</p>
            
            <p><b>tags: </b>
            @foreach($article->tags as $tag)
               {{ $tag->name }}
            @endforeach
            </p>
            <p><b>Categoría: </b>{{ $article->category->name }}</p>
            <span class="line"></span>
            <p>{!! $article->content !!}</p>

            <span class="line"></span>
            <div class="comentarios">
               <div id="disqus_thread"></div>
               <script>
                  /**
                  *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                  *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                  /*
                  var disqus_config = function () {
                  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                  };
                  */
                  (function() { // DON'T EDIT BELOW THIS LINE
                  var d = document, s = d.createElement('script');
                  s.src = 'https://datablog-2.disqus.com/embed.js';
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
                  })();
               </script>
               <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection