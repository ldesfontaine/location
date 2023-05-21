<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // USER MANAGEMENT

    public function createUser()
    {
        return view('CRUD.createUser');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'pwd' => 'required|min:8',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->pwd);
        $user->admin = $request->role;
        $user->save();

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('CRUD.editUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $oldPassword = $user->password;
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->pwd == null) {
            $user->password = $oldPassword;
        } else {
            $user->password = Hash::make($request->pwd);
        }
        $user->admin = $request->role;
        $user->save();
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('dashboard');
    }

    //TYPE MANAGEMENT
    public function create(){
        return view('CRUD.createType');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'actif' => 'required',
        ]);
        $type = new Type();
        $type->nom = $request->name;
        $type->actif = $request->actif;
        $type->save();
        return redirect()->route('dashboard');
    }


    public function editType($id){
        $type = Type::find($id);
        return view('CRUD.editType',compact('type'));
    }

    public function updateType(Request $request, $id){
        $type = Type::find($id);
        $type->nom = $request->name;
        $type->actif = $request->actif;
        $type->save();
        return redirect()->route('dashboard');
    }

    public function destroyType($id){
        $type = Type::find($id);
        $type->delete();
        return redirect()->route('dashboard');
    }


}
