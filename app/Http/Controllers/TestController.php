<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TestController extends Controller
{
  
  public function index()
    {

    $categories = Category::orderBy('id', 'ASC')->paginate();
	return view('template.partials.menu')->with('categories', $categories);


    }

}
