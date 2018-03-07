<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use Laracasts\Flash\Flash;




class CategoriesController extends Controller
{


	public function index()
    {

    
	return view('dashboard/categories/index');


    }


    public function edit($id)
    {
       
    }

	public function create(){

	return view('dashboard/categories/create');

	}

    public function update(Request $request, $id)
    {
        
       
    }


	public function store(CategoryRequest $request){

		$category = new Category($request->all());
		$category->save();

		flash('Se ha creado la categoría '. $category->name . ' con exito!')->success();
		return redirect()->route('categories.index');


	}

	public function show($id)
    {
        
    }

    public function destroy($id)
    {
        //
    }

    public function postNewImage(Request $request) {

     

        }    


}









