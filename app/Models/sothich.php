<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sothich extends Model
{
    use HasFactory;
    public $table = "so_thich";
    protected $fillable = [
        'ma_st',
        'noi_dung',
        'mo_ta',
    ];
}
