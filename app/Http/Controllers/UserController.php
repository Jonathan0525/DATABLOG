<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use App\User;
use App\Article;
use App\Tag;
use Laracasts\Flash\Flash;


use Intervention\Image\ImageManagerStatic as Image;
use Auth;
use Illuminate\Http\File;
use App\Http\Requests;




class UserController extends Controller
{


	public function index()
    {


    $user = User::all();
    return view('dashboard.user.index')->with('user', $user);



    }

    public function SearchIdUser(Request $request)
    {

    $article_id = Article::SearchIdUser($request->user_id)->orderBy('id', 'DES')->paginate();
    $article_id->each(function($article_id){
        $article_id->user;
        $article_id->tags;
    });
    
    return view('dashboard.user.articles')
            ->with('article_id', $article_id);
    


    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.user.edit')->with('user', $user);
    }

	public function create(){

		return view('template.user.create');

	}

    public function update(Request $request, $id)
    {
        
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        flash('!Ey <b>' . $user->name . '</b> has actualizado la información con exito!')->success();

        return redirect()->route('user.index');

        //redirect('/dashboard/'. $id .'/edit');
       
        //return view('dashboard.index')->with('user', $user);

        /*return view('/dashboard/index')->with('user', $user);*/
    }


	public function store(Request $request){


		$user = new User($request->all());
		$user->password = bcrypt($request->password);
		$user->save();

		return view('auth.login');
		

	}

	public function show($id)
    {
        
    }

    public function destroy($id)
    {
        //
    }

    /*public function getPhotoRouteAttribute() {

       if ($this->photo)

        return '/Applications/MAMP/htdocs/jonathan/DATABLOG/resources/views/dashboard/img/users/'.$this->id.'.'.$this->photo;

        return '/Applications/MAMP/htdocs/jonathan/DATABLOG/resources/views/dashboard/img/users/d.png';

    }*/

    public function postNewImage(Request $request) {

        /*$this->validate($request, [
            'photo' => 'required|image'
        ]);

        $user = Auth::user();
        
        $extension = $request->file('photo')->getClientOriginalExtension();
        $file_name = $user->id . '.' . $extension;


        //dd($file_name);

        Image::make($request->file('photo'))
            ->resize(144, 144)
            ->save('public/img/bg/' . $file_name);


        $user->photo = $file_name;
        $user->save();
        */

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $user = Auth::user();
            $file_name = $user->id . '.' . $photo->getClientOriginalExtension();

            Image::make($photo)->resize(144, 144)->save( public_path('/img/bg/' . $file_name));
            
            
            
            $user->photo = $file_name;
            $user->save();

        }
        
        
        flash('!Ey <b>' . $user->name . '</b> subiste tu foto con exito!')->success();

        return redirect()->route('user.index');

        }    


}









