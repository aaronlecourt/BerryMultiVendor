<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    public function login(Request $req)
    {
        $user = User::where(['name'=>$req->name])->first();

        if(!$user || !Hash::check($req->password,$user->password)){
            return "Username or password is incorrect!";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
