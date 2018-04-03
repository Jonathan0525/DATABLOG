<div class="asides">
   <div class="titu">
      <h3>Categorías</h3>
      <span class="line"></span>
   </div>
   <div class="tags_list">
      @foreach($categories as $category)
      <a href="{{ route('dashboard.search.category', $category->name) }}">
      <button type="button" class="btn btn-info">
      {{ $category->name }} <span class="badge badge-light">{{ $category->articles->count() }} </span>
      </button>
      </a>
      @endforeach
   </div>
</div>
<div class="asides">
   <div class="titu">
      <h3>Tags</h3>
      <span class="line"></span>
   </div>
   <div class="tags_list">
      @foreach($tags as $tag)
      <a href="{{ route('dashboard.search.tag', $tag->name) }}">
      <button type="button" class="btn btn-primary">
     {{$tag->name}}
      </button>
      </a>
      @endforeach
   
   </div>
</div>
