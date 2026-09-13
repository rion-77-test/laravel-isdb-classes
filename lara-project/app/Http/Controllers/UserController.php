<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private function guestAccessDeny($id = null)
    {
        if ($id) {
            if (Auth::user()->role_id == 5 && Auth::user()->id != $id) {
                abort(403);
                exit;
                // return redirect()->route('users.show', Auth::user()->id);
            }
        } else {
            if (Auth::user()->role_id == 5) {
                abort(403);
                exit;
            }
        }
    }

    public function index()
    {

        $this->guestAccessDeny();
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
            ->paginate(10);
        // dd($users);

        // return view('admin.pages.user.index', ['users' => $users]);
        return view('admin.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->guestAccessDeny();
        $roles = Role::orderBy('name', 'asc')->get();

        return view('admin.pages.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->guestAccessDeny();
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required | email|unique:users,email',
            'role_id' => 'required',
            // 'password' => 'required|min:3|max:15|confirmed',
            'password' => 'required|min:3|max:15',
            'password_confirmation' => 'required|same:password',
        ]);
        // dd();
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'role_id' => $request->role_id,
        //     'password' => Hash::make($request->password),
        // ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);
        $user->save();

        // $user =false;

        if ($user->save()) {
            return redirect()
                ->route('users.index')
                ->with('success', 'User created successfully');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Failed to create user');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $this->guestAccessDeny($id);

        $user = User::join('roles as r', 'users.role_id', '=', 'r.id')
            ->where('users.id', $id)
            ->select('users.id', 'users.name', 'users.email', 'r.name as role')
            ->first();

        return view('admin.pages.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->guestAccessDeny($id);

        $roles = Role::orderBy('name', 'asc')->get();
        $user = User::find($id);

        // dd($user);
        return view('admin.pages.user.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->guestAccessDeny($id);
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => "required | email|unique:users,email, $id",
            'role_id' => 'required',
        ]);

        // $user = User::find($id);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->role_id = $request->role_id;
        // $user->save();
        $user = User::where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => $request->role_id,
            ]);

        if ($user) {
            if (Auth::user()->role_id == 5) {
                return redirect()
                    ->route('users.show', ['user' => $id])
                    ->with('success', 'User updated successfully');
            }

            return redirect()
                ->route('users.index')
                ->with('success', 'User updated successfully');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Failed to update user');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd();
        // $user = User::find($id);
        // $user->delete();
        // dd(Auth::user()->role_id);

        if (Auth::user()->role_id != 1 && Auth::user()->role_id != 3) {
            abort(403);
        } else {
            User::destroy($id);

            return redirect()
                ->route('users.index')
                ->with('success', 'User deleted successfully');
        }

    }
}
