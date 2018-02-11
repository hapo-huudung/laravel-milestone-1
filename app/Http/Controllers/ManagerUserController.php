<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreate;
use App\Http\Requests\UserUpdate;
use App\User;
use Illuminate\Http\Request;

class ManagerUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserCreate $request)
    {
        $user = new User();
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
        ]);
        $user->save();
        return redirect()->route('users.index')->with('success', "Create Successfully");
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(UserUpdate $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
        ]);
        return redirect()->route('users.show', ['id' => $user->id]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $name = $user->name;
        $user->delete();
        return redirect()->route('users.index')->with('success', "$name was deleted successfully");
    }

    public function search()
    {
        $data = request()->content;
        $users=User::where('name','like',"%$data%")
            ->orWhere('email','lihke',"%$data%")
            ->orWhere('birthday','like',"%$data%")
            ->orWhere('address','like',"%$data%")
            ->paginate(5);
       // dd($users);
        return view('admin.users.index',['users'=>$users]);
    }
}
