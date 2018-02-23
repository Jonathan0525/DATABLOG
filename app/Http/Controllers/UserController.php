<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    

	public function create(){

		return view('template.user.create');

	}

	public function store(Request $request){


		$user = new User($request->all());
		$user->password = bcrypt($request->password);
		$user->save();

		return view('welcome');
		

	}


}
