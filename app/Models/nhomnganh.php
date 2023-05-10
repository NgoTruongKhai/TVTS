<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhomnganh extends Model
{
    use HasFactory;
    public $table = "nhom_nganh";
    protected $fillable = [
        'ma_nhom',
        'ten_nhom',
        'mo_ta',
    ];
}
