<?php

namespace App\Http\Controllers;

use App\Models\Role;

// use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        // $roles = Role::all()->toArray();
        // $roles = Role::all();
        $roles = Role::latest()->get();
        // dd($roles);

        // return view('admin.role.manage', compact($roles));
        return view('admin.role.manage', ['roles' => $roles]);
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function edit()
    {
        return view('admin.role.update');
    }

    // public function details()
    // {
    //     return view('admin.role.details');
    // }
}
