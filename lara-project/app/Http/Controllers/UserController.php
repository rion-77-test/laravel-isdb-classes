<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all()->orderBy('id', 'desc');
        // $users = User::orderBy('id', 'desc')->get();
        // $users = User::orderBy('name', 'asc')->get();
        // $users = User::orderBy('id', 'asc')->offset(5)->limit(5)->get();
        // $users = User::orderBy('id', 'asc')->offset(5)->first();
        // $users = User::orderBy('id', 'asc')
        //     ->whereIn('role_id', [2,3])
        //     ->get();
        // $users = User::orderBy('id', 'desc')
        //     ->select('id', 'name', 'email', 'role_id')
        //     ->first();
        // $users = User::from('users as u')
        //     ->join('roles as r', 'u.role_id', '=', 'r.id')
        //     ->orderBy('id', 'desc')
        //     ->select('u.id', 'u.name', 'u.email', 'r.name as role')
        //     ->first();
        $users = User::join('roles as r', 'users.role_id', '=', 'r.id')
            ->orderBy('id', 'desc')
            ->select('users.id', 'users.name', 'users.email', 'r.name as role')
            ->paginate(1);
        // dd($users);

        // return view('admin.pages.user.index', ['users' => $users]);
        return view('admin.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.user.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.user.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
