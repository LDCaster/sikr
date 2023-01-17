<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::get();
        $users = User::with(['role'])->get();

        return view('user.index', [
            'title' => 'Data User',
            'roles' => $roles,
            'users' => $users
        ]);
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
        //
        $request->validate([
            'name' => 'max:255',
            'img' => 'mimes:jpeg,jpg,png,gif,svg|image',
            'role_id' => 'max:255',
            'email' => 'max:255',
            'password' => 'max:255',
        ]);
        $request['password'] = Hash::make($request->password);
        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'assets/img/profile';
            $profileImage = date('YmdHis') . "." . $image->extension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        } else {
            unset($input['img']);
        }

        $user = User::create($input);
        return redirect('/user ')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::with(['role'])->find($id);
        return response()->json($user);
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
        $validatedData = $request->validate([
            'name' => 'max:255',
            'img' => 'mimes:jpeg,jpg,png,gif',
            'role_id' => 'max:255',
            'email' => 'max:255',
        ]);
        $foto_file = $request->file('img');
        User::where('id', $id)->update($validatedData);
        return redirect('/user')->with('success', 'Data Berhasil Di Ubah!');
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
        User::destroy($id);
        return redirect('/user')->with('success', 'Data Berhasil Dihapus!');
    }
}
