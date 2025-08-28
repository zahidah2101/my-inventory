<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserManagement;

class UserController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //query all users from the table 'users' using model
        $users_management = UserManagement::latest()->get(); //Collection of User objects
        //return to view with $users (resources/view/users/index.blade.php)
        return view('users_management.index', compact('users_management'));
    }

    public function create()
    {
        return view('users_management.create');
    }

    public function store(Request $request)
    {
        // store in the table 'users' using model
        //POPO - Plain Old PHP Object
        $users_management = new UserManagement();
        $users_management->name = $request->name;
        $users_management->email = $request->email;
        $users_management->phone = $request->phone;
        $users_management->address = $request->address;
        $users_management->age = $request->age;
        $users_management->marital_status = $request->marital_status;
        $users_management->save();

        //return to user index
        return redirect('/users_management');
    }

    public function show(UserManagement $users_management) //Model Binding for user
    {
        return view('users_management.show', compact('users_management'));
    }

    public function edit(UserManagement $users_management) //Model Binding for user
    {
        return view('users_management.edit', compact('users_management'));
    }

    public function update(Request $request, UserManagement $users_management) //Model Binding for user
    {
        //update using model
        $users_management->name = $request->name;
        $users_management->email = $request->email;
        $users_management->phone = $request->phone;
        $users_management->address = $request->address;
        $users_management->age = $request->age;
        $users_management->marital_status = $request->marital_status;
        $users_management->save();

        //return to user index
        return redirect('/users_management');
    }

    public function destroy(UserManagement $users_management)
    {
        // delete using model
        $users_management->delete();

        // return to user index
        return redirect('/users_management');
    }
}

