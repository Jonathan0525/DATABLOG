<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Article;
use App\Http\Requests\TagRequest;
use Laracasts\Flash\Flash;


class TagsController extends Controller
{
    

	public function index()
    {

    $tags = Tag::orderBy('id', 'DESC')->paginate(5);
	return view('dashboard.tags.index')->with('tags', $tags);


    }


    public function edit($id)
    {

    	$tag = Tag::find($id);
    	return view('dashboard.tags.edit')->with('tag', $tag);
       
    }

	public function create(){

	return view('dashboard.tags.create');

	}

    public function update(Request $request, $id)
    {
        
        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();
        flash('Se ha editado el tag "'. $tag->name . '" con exito!')->success();
		return redirect()->route('tags.index');
       
    }


	public function store(TagRequest $request){

	$tag = new Tag($request->all());
	$tag->save();

	flash('Se ha creado el tag "'. $tag->name . '" con exito!')->success()->important();

    return back();
	//return redirect()->route('tags.index');



	}

	public function show($id)
    {
        
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $article = Article::find($id);
        $tag->articles()->detach($article);
        $tag->delete();

        //dd($tag->articles());

        //$tag = Tag::find($id);
        //$tag->delete();

        flash('El tag "'. $tag->name . '" ha sido borrado')->warning();
		return redirect()->route('tags.index');

    }
}
