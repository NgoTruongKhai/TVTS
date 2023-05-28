<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\hocluc;
use App\Models\khanang;
use App\Models\khoithi;
use App\Models\luat;
use App\Models\monthi;
use App\Models\nhomnganh;
use App\Models\sothich;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class KhoiThiController extends Controller
{
    public function index()
    {
        $khoithi = khoithi::all();
        $monthi = monthi::all();
        return view('components.admin.khoithi.index', compact('khoithi', 'monthi'));
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

        $data['ten_khoi_thi'] = $request->makhoi;
        $data['mon_1'] = $request->mon1;
        $data['mon_2'] = $request->mon2;
        $data['mon_3'] = $request->mon3;
        if (!isset($data['ten_khoi_thi'])) {
            $alert = "Không được bỏ trống !";
            session()->flash('err', $alert);
            return redirect()->route('khoi-thi');
        }
        if ($data['mon_1'] == $data['mon_3'] || $data['mon_1'] == $data['mon_2'] || $data['mon_3'] == $data['mon_2']) {
            $alert = "Môn thi không được trùng nhau !";
            session()->flash('err', $alert);
            return redirect()->route('khoi-thi');
        }
        if (isset($request->id)) {
            khoithi::where('id', $request->id)->update($data);
            $alert = "cập nhật thành công !";
            session()->flash('alert', $alert);
        } else {
            khoithi::create($data);
            $alert = "Thêm  mới thành công !";
            session()->flash('alert', $alert);
        }
        return redirect()->route('khoi-thi');
    }


    public function delete($id)
    {
        khoithi::where('id', $id)->delete();
        $alert = "Xóa thành công !";
        session()->flash('alert', $alert);
        return redirect()->route('khoi-thi');
    }
}
