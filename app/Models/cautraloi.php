<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cautraloi extends Model
{
    use HasFactory;
    public $table = "cau_tra_loi";
    protected $fillable = [
        'id',
        'noi_dung',
        'id_cau_hoi',
        'id_nhom_nganh'
    ];
}
