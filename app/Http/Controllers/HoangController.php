<?php

namespace App\Http\Controllers;

use App\Models\Hoang;
use Illuminate\Http\Request;

class HoangController extends Controller
{
    public function test( Request $request){
        $listtest = Hoang::all();
        return view('test', compact('listtest'));
    }
    public function themtest(Request $request){
        $test = new Hoang();
        $test->setAttribute('name', $request->get('name'));
        $test->setAttribute('address', $request->get('address'));
        $test->save();
        return redirect()->back();
    }
    public function bangcuuchuong(Request $request){
        $bangcuuchuong= $request->get('bcc');
        return view('bangcuuchuong', compact('bangcuuchuong'));

    }
    public function tinhdientich(Request $request){
        $chieudai= $request->get('chieudai');
        $chieurong = $request->get('chieurong');
        $dientich = $chieudai * $chieurong;
        return view('dientich', compact('dientich','chieudai', 'chieurong'));
    }

    public function tinhchuvi(Request $request){
        $chieudai = $request->get('chieudai');
        $chieurong = $request->get('chieurong');
        $chuvi = ($chieudai + $chieurong) *2;
        return view('chuvi', compact('chieudai', 'chieurong', 'chuvi'));
    }

    public function chuvihinhvuong(Request $request){
        $canh = $request->get('canh');
        $chuvi = $canh *4;
        return view('chuvihv', compact('canh', 'chuvi'));
    }
}
