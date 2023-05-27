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

class TieuChiController extends Controller
{
    public function index()
    {
        $sothich = sothich::all();
        $khanang = khanang::all();
        $ma_st = sothich::latest('updated_at')->first();
        $ma_kn = khanang::latest('created_at')->first();
        $ma_st = 'ST' . explode('ST', $ma_st->ma_st)[1] + 1;
        $ma_kn = 'KN' . explode('KN', $ma_kn->ma_kn)[1] + 1;
        return view('components.admin.tieuchi.index', compact('sothich', 'khanang', 'ma_st', 'ma_kn'));
    }

    public function insert(Request $request)
    {
        if (isset($request->ma_st)) {
            $data['ma_st'] = $request->ma_st;
            $data['noi_dung'] = $request->noi_dung;
            $data['mo_ta'] = $request->mo_ta;
            if (sothich::where('ma_st', $data['ma_st'])->first()) {
                sothich::where('ma_st', $data['ma_st'])->update($data);
                $alert = "cập nhật thành công !";
                session()->flash('alert', $alert);
            } else {
                sothich::create($data);
                $alert = "Thêm  mới thành công !";
                session()->flash('alert', $alert);
            }
        }
        if (isset($request->ma_kn)) {
            $data['ma_kn'] = $request->ma_kn;
            $data['noi_dung'] = $request->noi_dung;
            $data['mo_ta'] = $request->mo_ta;
            if (khanang::where('ma_kn', $data['ma_kn'])->first()) {
                khanang::where('ma_kn', $data['ma_kn'])->update($data);
                $alert = "cập nhật thành công !";
                session()->flash('alert', $alert);
            } else {
                khanang::create($data);
                $alert = "Thêm mới thành công !";
                session()->flash('alert', $alert);
            }
        }
        return redirect()->route('tieu-chi');
    }


    public function delete($id)
    {
        if (sothich::where('ma_st', $id)->first()) {
            sothich::where('ma_st', $id)->delete();
        }
        if (khanang::where('ma_kn', $id)->first()) {
            khanang::where('ma_kn', $id)->delete();
        }
        $alert = "Xóa thành công !";
        session()->flash('alert', $alert);
        return redirect()->route('tieu-chi');
    }
}
