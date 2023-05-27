<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\cauhoi;
use Illuminate\Http\Request;

class CauHoiController extends Controller
{
    public function index()
    {
        $result = cauhoi::all();
        return view('components.admin.cauhoi.index', compact('result'));
    }
    public function loadForm()
    {
        return view('components.admin.cauhoi.Form');
    }

    public function insert(Request $request)
    {
        if (isset($request->id)) {
            $data['noi_dung'] = $request->noi_dung;
            if (empty($data['noi_dung'])) {
                session()->flash('err', 'Vui lòng nhập câu hỏi !');
                return redirect()->route('cau-hoi');
            };
            cauhoi::where('id', $request->id)->update($data);
            $alert = 'Cập nhật thành công !';
        } else {
            $data['noi_dung'] = $request->noi_dung;
            if (empty($data['noi_dung'])) {
                session()->flash('err', 'Vui lòng nhập câu hỏi !');
                return redirect()->route('cau-hoi');
            };
            cauhoi::create($data);
            $alert = 'Thêm mới thành công !';
        }
        session()->flash('alert', $alert);
        return redirect()->route('cau-hoi');
    }
    public function delete($id)
    {
        cauhoi::destroy($id);
        session()->flash('alert', 'Xóa thành công !');
        return redirect()->route('cau-hoi');
    }
}
