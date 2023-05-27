<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khoithi extends Model
{
    use HasFactory;
    public $table = "khoi_thi";
    protected $fillable = [
        'id',
        'ten_khoi_thi',
        'mon_1',
        'mon_2',
        'mon_3'
    ];
}
