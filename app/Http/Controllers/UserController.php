<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;

class UserController extends Controller
{


	public function index()
    {

        $user = User::orderBy('id', 'ASC')->paginate(5);
        return view('dashboard.user.index')->with('user', $user);;
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

	


}
