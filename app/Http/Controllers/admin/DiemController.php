<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Imports\DiemImport;
use App\Models\diem;
use Illuminate\Http\Request;
use App\Models\luat;
use App\Models\nganh;
use App\Models\nhomnganh;
use Illuminate\Support\Facades\Redis;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class DiemController extends Controller
{
    public function index()
    {
        $diem = diem::all();
        return view('components.admin.diem.index', compact('diem'));
    }

    public function loadForm()
    {
        $nhomnganh = nhomnganh::all();
        return view('components.admin.nganh.Form', compact('nhomnganh'));
    }
    public function loadFormUpdate($id)
    {
        $nhomnganh = nhomnganh::all();
        $nganh = nganh::where('ma_nganh', $id)->first();
        return view('components.admin.nganh.FormUpdate', compact('nganh', 'nhomnganh'));
    }
    public function update(Request $request)
    {
        $data['ma_nganh'] = $request->ma_nganh;
        $data['ten_nganh'] = $request->ten_nganh;
        $data['thong_tin_nganh_hoc'] = $request->mo_ta;
        $data['ma_nhom_nganh'] = $request->nhom_nganh;
        // return $data;
        if (empty($data['ma_nganh']) || empty($data['ma_nganh']) || empty($data['thong_tin_nganh_hoc'])) {
            session()->flash('err', 'Vui lòng nhập đầy đủ thông tin !');
            return redirect()->route('add-nganh');
        }
        nganh::where('ma_nganh', $data['ma_nganh'])->update($data);
        $alert = "Cập nhật thành công !";
        session()->flash('alert', $alert);
        return redirect()->route('nganh');
    }
    public function insert(Request $request)
    {
        $data['ma_nganh'] = $request->ma_nganh;
        $data['ten_nganh'] = $request->ten_nganh;
        $data['thong_tin_nganh_hoc'] = $request->mo_ta;
        $data['ma_nhom_nganh'] = $request->nhom_nganh;
        if (empty($data['ma_nganh']) || empty($data['ma_nganh']) || empty($data['thong_tin_nganh_hoc'])) {
            session()->flash('err', 'Vui lòng nhập đầy đủ thông tin !');
            return redirect()->route('add-nganh');
        }
        if (nganh::where('ma_nganh', $data['ma_nganh'])->first()) {
            session()->flash('err', 'Mã ngành đã tồn tại !');
            return redirect()->route('add-nganh');
        } else {
            nganh::create($data);
            $alert = "Thêm luật mới thành công !";
        }
        session()->flash('alert', $alert);
        return redirect()->route('nganh');
    }

    public function delete($id)
    {
        nganh::where('ma_nganh', $id)->delete();
        $alert = "Xóa thành công !";
        session()->flash('alert', $alert);
        return redirect()->route('nganh');
    }

    public function import(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'file' => 'required',
        ]);
        $file = $request->file('file');

        Excel::import(new DiemImport(), $file);
        return redirect()->route('diem');
    }
}
