<?php


namespace App\Http\Controllers;


use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use App\User;
use Laracasts\Flash\Flash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DashboardControllerr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         return view('welcome');
    }


 



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.index')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd('edit');
        $user = User::find($id);
        return view('dashboard.edit')->with('user', $user);

         
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('update');
       /* $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();*/

        //redirect('/dashboard/'. $id .'/edit');
       
        //return view('dashboard.index')->with('user', $user);

        /*return view('/dashboard/index')->with('user', $user);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }






}


























