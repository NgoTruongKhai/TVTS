<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\hocluc;
use App\Models\ketluan;
use App\Models\khanang;
use App\Models\luat;
use App\Models\nhomnganh;
use App\Models\sothich;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class KetLuanController extends Controller
{
    public function index()
    {
        $result = ketluan::all();
        $ma_kl = ketluan::latest('created_at')->first();
        // return explode('r', $ma_luat->ma_luat)[1] + 1;
        $ma_kl = 'KL' . explode('KL', $ma_kl->ma_kl)[1] + 1;
        return view('components.admin.ketluan.index', compact('result', 'ma_kl'));
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

        $data['ma_kl'] = $request->ma_kl;
        $data['noi_dung'] = $request->noi_dung;
        $data['mo_ta'] = $request->mo_ta;
        if (ketluan::where('ma_kl', $data['ma_kl'])->first()) {
            ketluan::where('ma_kl', $data['ma_kl'])->update($data);
            $alert = "cập nhật thành công !";
            session()->flash('alert', $alert);
        } else {
            ketluan::create($data);
            $alert = "Thêm mới thành công !";
            session()->flash('alert', $alert);
        }
        return redirect()->route('ket-luan');
    }


    public function delete($id)
    {
        ketluan::where('ma_kl', $id)->delete();
        $alert = "Xóa thành công !";
        session()->flash('alert', $alert);
        return redirect()->route('ket-luan');
    }
}
