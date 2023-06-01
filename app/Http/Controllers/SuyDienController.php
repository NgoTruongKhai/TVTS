<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\ketluan;
use App\Models\luat;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SuyDienController extends Controller
{
    private $knowledgeBase; // Cơ sở tri thức
    private $userProfile; // Hồ sơ người dùng
    private $kl;
    public function __construct()
    {
        // $this->knowledgeBase = $knowledgeBase;
        $this->knowledgeBase = $this->rules();
        $this->userProfile = [];
        $ketluan = ketluan::select('ma_kl')->get();

        foreach ($ketluan as $key => $value) {
            $this->kl[] = $value->ma_kl;
        }
    }

    public function rules()
    {
        $luat = luat::all();
        foreach ($luat as $key => $value) {
            $arr = explode('>', $value->noi_dung);
            $rules[$value->ma_luat][$arr[1]] = explode('^', $arr[0]);
        }

        return $rules;
    }

    public function addUserProfile($profile)
    {
        $this->userProfile = $profile;
    }

    public function recommendMajor()
    {
        // Tạo danh sách ngành học được đề xuất
        $recommendedMajors = [];
        foreach ($this->knowledgeBase as $major => $requirements) {
            // Kiểm tra xem ngành học có đáp ứng yêu cầu hồ sơ người dùng không
            foreach ($requirements as $key => $value) {
                // var_dump($value);
                // echo '</br>';
                // var_dump($this->userProfile);
                // echo '</br>';
                // die;
                $requirementsMet = true;
                foreach ($value as $item) {
                    if (!in_array($item, $this->userProfile)) {
                        $requirementsMet = false;
                        break;
                    }
                }
                if (!in_array($key, $this->kl) && !in_array($key, $this->userProfile)) {
                    $this->userProfile[] = $key;
                    unset($this->knowledgeBase[$major]);
                    return $this->recommendMajor();
                }
                // var_dump($requirementsMet);
                if ($requirementsMet && !in_array($key, $recommendedMajors)) {

                    $recommendedMajors[] = $key;
                }
            }
        }
        return $recommendedMajors;
    }
}
