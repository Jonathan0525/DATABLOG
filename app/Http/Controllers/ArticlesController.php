<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use App\Imagen;
use App\Http\Requests\ArticleRequest;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\File;

class ArticlesController extends Controller
{
    //

    public function index()
    {

    
	return view('dashboard.articles.index');


    }


    public function edit($id)
    {

    	$tag = Tag::find($id);
    	return view('dashboard.tags.edit')->with('tag', $tag);
       
    }

	public function create(){


		$categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
		$tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');

		return view('dashboard.articles.create')
			->with('categories', $categories)
			->with('tags', $tags);

	}

    public function update(Request $request, $id)
    {
        
        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();
        flash('Se ha editado el tag "'. $tag->name . '" con exito!')->success();
		return redirect()->route('tags.index');
       
    }


	public function store(ArticleRequest $request){

	

	if ($request->file('image'))

	{
		$file = $request->file('image');
		$name = 'datablog' . time() . '.' . $file->getClientOriginalExtension();
		$path = public_path() . '/img/articulos/';
		Image::make($file)->heighten(300, function ($constraint) {$constraint->upsize();})->save($path . $name);
		//$file->move($path, $name);
	}

	$article = new Article($request->all());
	$article->user_id = \Auth::user()->id;
	$article->save();

	$article->tags()->sync($request->tags);

	$image = new Imagen();
	$image->name = $name;
	$image->article()->associate($article);
	$image->save();

	flash('Se ha creado el Artículo "'. $article->title . '" con exito!')->success()->important();

	return redirect()->route('articles.index');


	}

	public function show($id)
    {
        
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        flash('El tag "'. $tag->name . '" ha sido borrado')->warning();
		return redirect()->route('tags.index');

    }
}
