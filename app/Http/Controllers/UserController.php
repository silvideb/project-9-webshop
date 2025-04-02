<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('users.index' , compact('users'));
    }

    public function create()
    {

        

        return view('users.create');
    }

    public function store(Request $request)
    {
       User::create($request->all());
    

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $users =  User::findorFail($id);
        $roles = Role::all();
        
        
        return view('users.edit', compact('users' , 'roles'));
    }

    public function update(Request $request, $id)
    {


        // dd($request->all());
       
        $user = User::findorfail($id);
        $roles = Role::all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        
        ]);
        $user->update($request->all()); 
        $user->roles()->sync($request->roles);  
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $users = User::findorFail($id);

        $users->delete();
       
       
        
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', compact('user'));
    }
}

