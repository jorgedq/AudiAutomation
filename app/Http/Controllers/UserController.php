<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        return view('user.userIndex',compact('user'));
    }
    public function edit(){
        $user = User::find(Auth::user()->id);
        return view('user.userEdit',compact('user'));

    }
    public function update(Request $request){
        
        $user = User::find(Auth::user()->id);
        if($request->password){
            $validatedData = $request->validate([
                'name' => 'required|max:50,name,'.$user->name.',name',
                'email' => 'required|email|max:255|unique:users,email,'.$user->email.',email',
                'password' => 'min:8|confirmed',
            ]);
            $request['password'] = Hash::make($request->password);
            $user->fill($request->all());
            $user->save();
            return redirect('/profile');
        }else{
            $validatedData = $request->validate([
                'name' => 'required|max:50,name,'.$user->name.',name',
                'email' => 'required|email|max:255|unique:users,email,'.$user->email.',email',
            ]);
            $request['password'] = $user->password;
            $user->fill($request->all());
            $user->save();
            return redirect('/profile');
        }
    }
}
