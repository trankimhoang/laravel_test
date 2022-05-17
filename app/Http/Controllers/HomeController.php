<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexA() {
        $listUser = User::all();

        return view('home', compact('listUser'));
    }
    public function index(){
        return view('trangchu');
    }
}
