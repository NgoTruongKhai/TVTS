<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\nhomnganh;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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
        $data = nhomnganh::where('ma_nhom', $id)->first();
        return view('components.admin.NhomNganh.Form', compact('data'));
    }

    public function insert(Request $request)
    {
        $data['ma_nhom'] = $request->code;
        $data['ten_nhom_nganh'] = $request->name;
        $data['mo_ta'] = ltrim(chop($request->description, '</p>'), '<br><p>');
        $data['ten_nhom_nguoi'] = $request->name1;
        $data['nganh'] = $request->nganh;
        // return response()->json($data);

        if (empty($data['ma_nhom']) || empty($data['ten_nhom_nganh']) || empty($data['ten_nhom_nguoi']) || empty($data['mo_ta'])) {
            $err = 'Vui lòng nhập đầy đủ thông tin !';
            return view('components.admin.NhomNganh.form', compact('data', 'err'));
        }

        $ma_nhom = nhomnganh::where('ma_nhom', $data['ma_nhom'])->get();
        if ($ma_nhom->count() == 1) {
            $err = 'Mã nhóm đã tồn tại !';
            return view('components.admin.NhomNganh.form', compact('data', 'err'));
        }

        nhomnganh::create($data);
        $alert = "Thêm mới thành công !";
        session()->flash('alert', $alert);
        return redirect()->route('nhom-nganh');
        // return view('components.admin.NhomNganh.index', compact('result', 'alert'));
    }

    public function update(Request $request)
    {
        $data['ma_nhom'] = $request->code;
        $data['ten_nhom_nganh'] = $request->name;
        $data['mo_ta'] = ltrim(chop($request->description, '</p>'), '<br><p>');
        $data['ten_nhom_nguoi'] = $request->name1;
        $data['nganh'] = $request->nganh;
        // return $data;
        if (empty($data['ma_nhom']) || empty($data['ten_nhom_nguoi']) || empty($data['ten_nhom_nganh']) || empty($data['mo_ta'])) {
            $err = 'Vui lòng nhập đầy đủ thông tin !';
            return view('components.admin.NhomNganh.form', compact('data', 'err'));
        }

        $ma_nhom = nhomnganh::where('ma_nhom', $data['ma_nhom'])->get();

        if ($ma_nhom->count() == 1) {
            nhomnganh::where('ma_nhom', $data['ma_nhom'])->update($data);
            $alert = 'Cập nhật thành công !';
            session()->flash('alert', $alert);
            return redirect()->route('nhom-nganh');
        }
    }

    public function delete($id)
    {
        nhomnganh::where('ma_nhom', $id)->delete();
        $alert = "Xóa nhóm ngành thành công !";
        session()->flash('alert', $alert);
        return redirect()->route('nhom-nganh');
    }
}
