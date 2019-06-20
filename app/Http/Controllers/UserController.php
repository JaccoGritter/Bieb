<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Traits\Timestamp;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('libadmin.users', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('libadmin.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'unique:users,email'],
            'password' => ['required', 'unique:users,password'],
            'subscription_valid_until' => ['required', 'date'],
        ]);

        $user = new User;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->password = $request->password;
        $user->subscription_valid_until = $request->subscription_valid_until;

        $user->save();

        return redirect('\users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('libmember.userIndex', compact('user'));
    }

    /** 
     * Display all users to a user
     *
     * @return \Illuminate\Http\Response
     */

    public function userLogin()
    {
        $users = user::all();
        return view('libmember.login', compact('users'));
    }


    public function getLentBooks()
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        $lentBooks = $user->books;
        return view('libmember.lentbooks', compact('lentBooks'));
    }

    /** 
     * Display a user
     *
     * @return \Illuminate\Http\Response
     */

    // public function userIndex(user $user)
    // {

    //     return view('libuser.userIndex', compact('user'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
