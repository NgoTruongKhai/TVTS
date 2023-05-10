<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CauHoiController extends Controller
{
    public function index()
    {
        // $result = cauhoi::all();
        return view('components.admin.cauhoi.index');
    }
    public function loadForm()
    {
        return view('components.admin.cauhoi.Form');
    }

    public function insert(Request $request)
    {
        // $data['ma_nhom'] = $request->code;
        // $data['ten_nhom'] = $request->name;
        // $data['mo_ta'] = $request->description;
        // // return $data;
        // $result = nhomnganh::create($data);
        return view('components.admin.cauhoi.index', compact('result'));
    }
}
