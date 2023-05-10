<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
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
        return view('components.holland.form');
    }
    public function resultHolland(Request $request)
    {
        $arr['R'] = array_sum($request->R);
        $arr['I'] = array_sum($request->I);
        $arr['A'] = array_sum($request->A);
        $arr['S'] = array_sum($request->S);
        $arr['E'] = array_sum($request->E);
        $arr['C'] = array_sum($request->C);
        $result = array();
        $max = max($arr);
        if ($max == 0) {
            array_push($result, 'Bạn không có nhóm ngành phù hợp !');
        } else {
            foreach ($arr as $key => $val) {
                if ($val == $max) {
                    array_push($result, $key);
                }
            }
        }

        return view('components.holland.form', compact('result'));
    }
}
