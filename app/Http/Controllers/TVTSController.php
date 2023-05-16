<?php

namespace App\Http\Controllers;

use App\Models\cauhoi;
use App\Models\cautraloi;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\nhomnganh;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TVTSController extends Controller
{
    public function diem()
    {

        return view('components.diem.form');
    }
    public function resultdiem(Request $request)
    {
        dd($request);
    }
    public function holland()
    {
        $nhom_nganh = nhomnganh::all();
        $cauhoi = cauhoi::all();
        foreach ($nhom_nganh as $item) {
            foreach ($cauhoi as $ite) {
                $data[$item->ma_nhom][$ite->id] = cautraloi::where('ma_nhom_nganh', $item->id)->where('id_cau_hoi', $ite->id)->get();
            }
        }
        // return response()->json($data);
        return view('components.holland.form', compact('data', 'cauhoi'));
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
}
