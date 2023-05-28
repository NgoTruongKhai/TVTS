<?php

namespace App\Http\Controllers;

use App\Models\cauhoi;
use App\Models\cautraloi;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\diem;
use App\Models\hocluc;
use App\Models\ketluan;
use App\Models\khanang;
use App\Models\khoithi;
use App\Models\monthi;
use App\Models\nganh;
use App\Models\nhomnganh;
use App\Models\sothich;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TVTSController extends Controller
{
    public function diem()
    {
        $khoithi = khoithi::all();
        return view('components.diem.form', compact('khoithi'));
    }

    public function getmonthi($id)
    {
        $khoithi = khoithi::where('ten_khoi_thi', $id)->first();
        return $khoithi;
    }

    public function resultdiem(Request $request)
    {
        $diem['mon1'] = $request->diem1;
        $diem['mon2'] = $request->diem2;
        $diem['mon3'] = $request->diem3;
        $khoithi = $request->khoithi;
        $sumdiem = array_sum($diem);
        $nam = diem::max('nam');
        // return $nam;
        $ma_nganh = diem::where('diem', '<=', $sumdiem)->where('khoi_thi', $khoithi)->where('nam', $nam)->select('ma_nganh')->get();
        // return $ma_nganh;
        $nganh = nganh::whereIn('ma_nganh', $ma_nganh)->get();
        $khoithi = khoithi::all();
        return view('components.diem.form', compact('khoithi', 'nganh'));
    }


    public function holland()
    {
        $nhomnganh = nhomnganh::all();
        $cauhoi = cauhoi::all();
        $cautraloi = cautraloi::all();
        // foreach ($nhom_nganh as $item) {
        //     foreach ($cauhoi as $ite) {
        //         $data[$item->ma_nhom][$ite->id] = cautraloi::where('ma_nhom_nganh', $item->ma_nhom)->where('id_cau_hoi', $ite->id)->get();
        //     }
        // }
        // return response()->json($cauhoi);
        return view('components.holland.form', compact('nhomnganh', 'cauhoi', 'cautraloi'));
    }


    public function resultHolland(Request $request)
    {
        $nhom_nganh = nhomnganh::all();

        $arr['R'] = array_sum($request->R);
        $arr['I'] = array_sum($request->I);
        $arr['A'] = array_sum($request->A);
        $arr['S'] = array_sum($request->S);
        $arr['E'] = array_sum($request->E);
        $arr['C'] = array_sum($request->C);
        // $sum = array_sum($arr);
        // foreach ($arr as $key => $val) {
        //     $result[$key] = round(($val / $sum) * 100, 1);
        // }
        $result = $arr;
        // if ($max == 0) {
        //     array_push($result, 'Bạn không có nhóm ngành phù hợp !');
        // } else {
        //     foreach ($arr as $key => $val) {
        //         if ($val == $max) {
        //             $tmp = nhomnganh::where('ma_nhom', $key)->get();
        //             array_push($result, $tmp);
        //         }
        //     }
        // }
        // var_dump($result[0][0]->mo_ta);
        // die;
        return view('components.holland.form', compact('result', 'nhom_nganh'));
    }

    public function kethop()
    {
        $nhomnganh = nhomnganh::all();
        $hocluc = hocluc::all();
        $sothich = sothich::all();
        $khanang = khanang::all();
        return view('components.kethop.index', compact('nhomnganh', 'hocluc', 'khanang', 'sothich'));
    }

    public function result(Request $request)
    {
        // return response()->json($request);
        $userprofile['so_thich'] = $request->so_thich;
        $userprofile['kha_nang'] = $request->kha_nang;
        $userprofile['hoc_luc'] = $request->hoc_luc;
        $userprofile['nganh_nghe'] = $request->nhom_nganh;
        $userprofile['khoi_thi'] = $request->khoi_thi;

        // return $userprofile;
        $advisor = new SuyDienController();
        // return response()->json($advisor->rules());
        $advisor->addUserProfile($userprofile);
        $recommendedMajors = $advisor->recommendMajor();

        $ma_nganh = ketluan::whereIn('ma_kl', $recommendedMajors)->select('noi_dung')->get();
        $nganh = nganh::whereIn('ma_nganh', $ma_nganh)->get();
        $nhomnganh = nhomnganh::all();
        $hocluc = hocluc::all();
        $sothich = sothich::all();
        $khanang = khanang::all();
        return view('components.kethop.index', compact('nhomnganh', 'hocluc', 'khanang', 'sothich', 'nganh'));
    }
}
