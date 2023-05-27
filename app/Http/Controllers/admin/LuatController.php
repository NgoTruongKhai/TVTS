<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\hocluc;
use App\Models\khanang;
use App\Models\luat;
use App\Models\nhomnganh;
use App\Models\sothich;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LuatController extends Controller
{
    public function index()
    {
        $result = luat::all();
        $ma_luat = luat::latest('created_at')->first();
        // return explode('r', $ma_luat->ma_luat)[1] + 1;
        $ma_luat = 'r' . explode('r', $ma_luat->ma_luat)[1] + 1;
        return view('components.admin.luat.index', compact('result', 'ma_luat'));
    }

    public function loadForm()
    {
        $nhom_nganh = nhomnganh::all();
        $hoc_luc = hocluc::all();
        $so_thich = sothich::all();
        $kha_nang = khanang::all();
        $ma_luat = luat::latest('created_at')->first();
        // return explode('r', $ma_luat->ma_luat)[1] + 1;
        $ma_luat = 'r' . explode('r', $ma_luat->ma_luat)[1] + 1;
        return view('components.admin.luat.Form', compact('kha_nang', 'so_thich', 'nhom_nganh', 'hoc_luc', 'ma_luat'));
    }


    public function insert(Request $request)
    {
        $data['ma_luat'] = $request->ma_luat;
        $data['noi_dung'] = $request->noi_dung;
        if (luat::where('ma_luat', $data['ma_luat'])->first()) {
            luat::where('ma_luat', $data['ma_luat'])->update($data);
            $alert = "cập nhật thành công !";
            session()->flash('alert', $alert);
        } else {
            luat::create($data);
            $alert = "Thêm luật mới thành công !";
            session()->flash('alert', $alert);
        }
        return redirect()->route('luat');
    }


    public function delete($id)
    {
        luat::where('ma_luat', $id)->delete();
        $alert = "Xóa nhóm ngành thành công !";
        session()->flash('alert', $alert);
        return redirect()->route('luat');
    }
}
