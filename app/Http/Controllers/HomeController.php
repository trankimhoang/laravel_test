<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexTest(Request $request) {
        $search = $request->get('search') ?? '';
        $listCategory = Category::where('name', 'like', '%' . $search . '%')->get();
        return view("hometest", compact('listCategory', 'search'));
    }

    public function them(Request $request){
        $category = new Category();
        $category->setAttribute('name', $request->get('name'));
        $category->setAttribute('content', $request->get('content'));
        $category->save();
        return redirect()->back();
    }

    public function index(Request $request) {
       $id = $request->get('id');
       $article = Article::find($id);

       if (empty($article)) {
           abort(404);
       }
        return view('baiviet', compact('article'));
    }

    public function User(Request $request) {
        $id = $request->get('id');
        $user = User::find($id);

        if (empty($user)){
            abort(404);
        }
        return view('user', compact('user'));
    }
}
