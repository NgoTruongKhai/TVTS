<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class luat extends Model
{
    use HasFactory;
    public $table = "luat";
    protected $fillable = [
        'ma_luat',
        'noi_dung',
        'mo_ta',
    ];
}
