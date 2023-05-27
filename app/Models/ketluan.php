<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ketluan extends Model
{
    use HasFactory;
    public $table = "ket_luan";
    protected $fillable = [
        'ma_kl',
        'noi_dung',
        'mo_ta',
    ];
}
