<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(Request $request){
        $listUser = User::all();
        return view('user.list', compact('listUser'));
    }
    public function them(Request $request){
        $user = new User();
        $user->setAttribute('name', $request->get('name'));
        $user->setAttribute('email', $request->get('email'));
        $user->setAttribute('password', '');
        $user->save();
        return redirect()->back();
    }
}
