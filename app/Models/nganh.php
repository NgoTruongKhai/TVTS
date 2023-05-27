<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nganh extends Model
{
    use HasFactory;
    public $table = "nganh";
    protected $fillable = [
        'ma_nganh',
        'ten_nganh',
        'thong_tin_nganh_hoc',
        'ma_nhom_nganh'
    ];
}
