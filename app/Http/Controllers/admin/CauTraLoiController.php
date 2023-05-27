<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\cauhoi;
use App\Models\cautraloi;
use App\Models\nhomnganh;
use Illuminate\Http\Request;

class CauTraLoiController extends Controller
{
    public function index()
    {
        $result = cautraloi::all();
        $cauhoi = cauhoi::all();
        $nhomnganh = nhomnganh::all();
        return view('components.admin.cautraloi.index', compact('result', 'nhomnganh', 'cauhoi'));
    }

    public function loadForm()
    {
        $cauhoi = cauhoi::all();
        $nhomnganh = nhomnganh::all();
        return view('components.admin.cautraloi.Form', compact('nhomnganh', 'cauhoi'));
    }
    public function loadformupdate()
    {
        $cauhoi = cauhoi::all();
        $nhomnganh = nhomnganh::all();
        $cautraloi = cautraloi::all();
        return view('components.admin.cautraloi.FormUpdate', compact('nhomnganh', 'cauhoi', 'cautraloi'));
    }
    public function insert(Request $request)
    {
        if (isset($request->id)) {
            $data['id_cau_hoi'] = $request->cauhoi;
            $data['noi_dung'] = $request->noi_dung;
            $data['ma_nhom_nganh'] = $request->nhomnganh;
            // return $data;
            if (isset($request->noi_dung)) {
                cautraloi::where('id', $request->id)->update($data);
                session()->flash('alert', 'Cập nhật thành công');
            } else {
                session()->flash('err', 'Vui lòng nhập đầy đủ thông tin !');
            }
        } else {
            $check = false;
            foreach ($request->noi_dung as $key => $value) {
                if ($value != null) {
                    $check = true;
                    break;
                }
            }
            if ($check) {
                foreach ($request->noi_dung as $key => $value) {
                    if ($value !== null) {
                        cautraloi::create([
                            'id_cau_hoi' => $request->cauhoi,
                            'ma_nhom_nganh' => $request->nhomnganh,
                            'noi_dung' => $value
                        ]);
                    }
                }
                session()->flash('alert', 'Thêm mới thành công');
            } else {
                session()->flash('err', 'Vui lòng nhập đầy đủ thông tin !');
            }
        }
        return redirect()->route('cau-tra-loi');
    }

    public function delete($id)
    {
        cautraloi::destroy($id);
        session()->flash('alert', 'Xóa thành công !');
        return redirect()->route('cau-tra-loi');
    }
}
