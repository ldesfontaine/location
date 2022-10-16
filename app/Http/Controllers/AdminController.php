<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function edit($id){
        $user = User::find($id);
        return view('CRUD.editUser',compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  Hash::make($request->pwd);
        $user->admin = $request->role;
        $user->save();
        return redirect('/');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}
