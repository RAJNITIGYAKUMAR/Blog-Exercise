<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function loginSubmit(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user ||  !Hash::check($req->password,$user->password))
        {
            return redirect('/login');
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function Register(Request $req)
    {
        validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect ('login');
    } 

    function logout()
    {
        if(session()->has('user'))
        {
            session()->pull('user',null);
           
        }
        return redirect ("login");
    }
}
