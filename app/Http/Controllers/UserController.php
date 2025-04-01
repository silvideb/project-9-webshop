<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        // Logic to store user data
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        return view('users.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update user data
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        // Logic to delete user
        return redirect()->route('users.index');
    }
}

