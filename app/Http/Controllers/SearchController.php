<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\User;
use App\Article;
use App\Imagen;

class SearchController extends Controller
{
    
    public function index(Request $request)
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








































