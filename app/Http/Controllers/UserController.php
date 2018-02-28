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

        return view('dashboard.index')->with('user', $users);;
    }


    public function edit($id)
    {

        dd('estas');
    }

	public function create(){

		return view('template.user.create');

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

	public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


}
