<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;
use App\Tag;


class AsideComposer {


	public function compose(View $view)
	{


		$categories = Category::all();
		$tags = Tag::all();
		$view->with('categories', $categories)->with('tags', $tags);


	}



}

