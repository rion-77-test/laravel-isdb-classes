<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $roles = Role::all();
        // $roles = DB::table('roles')->get();
        // $roles =  DB::table('roles')->where('name', 'admin')->get();
        // $roles =  DB::table('roles')->offset(2)->limit(2)->get();
        // $roles =  DB::table('products')->min('price');
        // $roles =  DB::table('products')->max('price');
        // $roles =  DB::table('products')->avg('price');
        // $roles = DB::table('products as p')
        //     ->join('categories as c', 'p.category_id', '=', 'c.id')
        //     ->join('brands as b', 'p.brand_id', '=', 'b.id')
        //     ->select('p.name', 'c.name as category', 'b.name as brand', 'p.price')
        //     ->get();
        // dd($roles);
        // $roles = DB::table('roles as r')
        //     ->join('users as u', 'r.id', '=', 'u.role_id')
        //     ->select('r.name as role')
        //     ->selectRaw('COUNT(u.id) as no_of_users')
        //     ->groupBy('role')
        //     ->toSql();

        $roles = DB::table('roles')->orderBy('name', 'asc')->paginate(15);

        // dd($roles);
        return view('admin.pages.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|min:3',
        ]);
        // $role = new Role;
        // $role->name = $request->name;
        // $role->save();
        $role = DB::table('roles')
            ->insert([
                'name' => $request->name,
            ]);

        return redirect()->route('roles.index')->with('success', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('admin.pages.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        // dd($role);
        $request->validate([
            'name' => 'required|min:3',
        ]);

        // $role->name = $request->name;
        // $role->save();
        $role = DB::table('roles')
            ->where('id', $role->id)
            ->update([
                'name' => $request->name,
            ]);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        // Role::destroy($role->id);
        $role = DB::table('roles')
            ->where('id', $role->id)
            ->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
    }

    // Custom Method
    public function search(Request $request)
    {
        //   dd("Search Works");
        // echo "Search Works: " . $request->get('search');
        // echo "Search Works: " . $request->search;
        $roles = DB::table('roles')
            ->where('name', 'LIKE', "%$request->search%")
            ->get();
        echo json_encode($roles);
    }
}
