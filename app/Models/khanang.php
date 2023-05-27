<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khanang extends Model
{
    use HasFactory;
    public $table = "kha_nang";
    protected $fillable = [
        'ma_kn',
        'noi_dung',
        'mo_ta'
    ];
}
