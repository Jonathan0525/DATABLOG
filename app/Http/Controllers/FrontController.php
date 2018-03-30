<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
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


}








































