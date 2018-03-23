<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\File;

class ArticlesController extends Controller
{
    //

    public function index()
    {

    $tags = Tag::orderBy('id', 'DESC')->paginate(5);
	return view('dashboard.articles.index')->with('tags', $tags);


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


	public function store(Request $request){

	$file = $request->file('image');
	$name = 'datablog' . time() . '.' . $file->getClientOriginalExtension();
	$path = public_path() . '/img/articulos/';
	Image::make($file)->widen(300, function ($constraint) {$constraint->upsize();})->save($path . $name);
	//$file->move($path, $name);


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
