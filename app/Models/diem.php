<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diem extends Model
{
    use HasFactory;
    public $table = "diem";
    protected $fillable = [
        'id',
        'ma_nganh',
        'nam',
        'diem',
        'khoi_thi'
    ];
}
