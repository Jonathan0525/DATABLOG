<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\User;
use App\Article;
use App\Imagen;

class FrontController extends Controller
{
    
    public function index()
    {

    $articles = Article::orderBy('id', 'DES')->paginate(9);

    $articles->each(function($articles){
    	$articles->user;
    	$articles->images;
    });
    
    return view('welcome')
			->with('articles', $articles);

    
    }


    public function viewArticle($slug)
    {
       
        $article = Article::findBySlugOrFail($slug);
        $article->category;
        $article->user;
        $article->tags;
        $article->images;

        return view('dashboard.articles.vista')->with('article', $article);

    }

    public function searchCategory($name) {


        $category = Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });

        return view('welcome')
            ->with('articles', $articles);

    }

    public function searchTag($name) {


        $tags = Tag::SearchTag($name)->first();
        $articles = $tags->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->tag;
            $articles->images;
        });

        return view('welcome')
            ->with('articles', $articles);

    }

    public function searchArticle(Request $request)
    {

    $articles = Article::SearchArticle($request->title)->orderBy('id', 'DES')->paginate(9);
    $articles->each(function($articles){
        $articles->user;
        $articles->category;
    });
    
    return view('welcome')
            ->with('articles', $articles);
    }


}








































