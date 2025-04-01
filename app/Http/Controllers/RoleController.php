<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
{
    $roles = Role::all();

    return view('roles.index', compact('roles'));
}

public function create()
{
    $roles = Role::all();

    return view('roles.create', compact('roles'));
}

public function store(RoleRequest $request)
{
    $role = new Role();

    $this->save($role, $request);

    return redirect('/roles');
}

public function show($role)
{
    $role = Role::find($role);

    return view('roles.show', compact('role'));
}

public function edit(Role $role)
{
    return view('roles.edit', compact('role'));
}

public function update(RoleRequest $request, Role $role)
{
    $this->save($role, $request);

    return redirect('/roles');
}

public function destroy($role)
{
    $role->delete();

    return redirect('/roles');
}

    private function save(Role $role, Request $request)
{
    $role->name = $request->name;
    $role->save();
}

}
