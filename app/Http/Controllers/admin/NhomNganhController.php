<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\nhomnganh;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class NhomNganhController extends Controller
{
    public function index()
    {
        $result = nhomnganh::all();
        return view('components.admin.NhomNganh.index', compact('result'));
    }

    public function loadForm()
    {
        return view('components.admin.NhomNganh.Form');
    }

    public function loadFormUpdate($id)
    {
        $result = nhomnganh::where('ma_nhom', $id)->get();
        return view('components.admin.NhomNganh.Form');
    }

    public function insert(Request $request)
    {
        $data['ma_nhom'] = $request->code;
        $data['ten_nhom'] = $request->name;
        $data['mo_ta'] = $request->description;
        // return $data;
        if ($data['mo_ta'] === '<p><br></p>') {
            $err = 'Vui lòng nhập đầy đủ thông tin !';
            return view('components.admin.NhomNganh.form', compact('err'));
        }
        return view('components.admin.NhomNganh.form', compact('err'));
        if (empty($data['mo_ta']) || empty($data['ma_nhom']) || empty($data['ten_nhom'])) {
            $err = 'Vui lòng nhập đầy đủ thông tin !';
            return view('components.admin.NhomNganh.form', compact('err'));
        }
        // var_dump($data);
        // die();
        $ma_nhom = nhomnganh::where('ma_nhom', $data['ma_nhom'])->get();
        if ($ma_nhom->count() == 1) {
            $err = 'Mã nhóm đã tồn tại !';
            return view('components.admin.NhomNganh.form', compact('err'));
        }

        nhomnganh::create($data);
        $result = nhomnganh::all();
        // var_dump($result);
        // die();
        return view('components.admin.NhomNganh.index', compact('result'));
    }

    public function update(Request $request)
    {
        $data['ma_nhom'] = $request->code;
        $data['ten_nhom'] = $request->name;
        $data['mo_ta'] = $request->description;
        // return $data;
        if (empty($data['mo_ta']) || empty($data['ma_nhom']) || empty($data['ten_nhom'])) {
            $err = 'Vui lòng nhập đầy đủ thông tin !';
            return view('components.admin.NhomNganh.form', compact('err'));
        }

        $ma_nhom = nhomnganh::where('ma_nhom', $data['ma_nhom'])->get();
        // var_dump($ma_nhom->count());
        // die();
        if ($ma_nhom->count() == 1) {
            nhomnganh::where('ma_nhom', $data['ma_nhom'])->update($data);
            $result = nhomnganh::all();
            return view('components.admin.NhomNganh.index', compact('result'));
        }
    }
}
