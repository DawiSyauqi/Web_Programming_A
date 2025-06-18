<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = \App\Models\User::all(); 
        return view('user.index', ['users' => $users]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('user.create'); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new \App\Models\User; 
$user->name = $request->get('nama'); 
        $user->username = $request->get('username'); 
        $user->email = $request->get('email'); 
        $user->password = \Hash::make($request->get('password')); 
        $user->level = json_encode($request->get('level')); 
         
        $user->save(); 
 
        return redirect()->route('users.index')->with('status','user baru 
berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = \App\Models\User::findOrFail($id); 
return view('user.edit', ['user' => $user]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = \App\Models\User::findOrFail($id); 
$user->name = $request->get('nama'); 
$user->level = json_encode($request->get('level')); 
$user->save(); 
return redirect()->route('users.index', [$id])->with('status', 
'User berhasil diubah'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = \App\Models\User::findOrFail($id); 
$user->delete(); 
return redirect()->route('users.index')->with('status', 'User 
berhasil dihapus'); 
    }
}
