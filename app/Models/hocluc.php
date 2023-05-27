<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hocluc extends Model
{
    use HasFactory;
    public $table = "hoc_luc";
    protected $fillable = [
        'ma_hl',
        'noi_dung',
        'mo_ta',
    ];
}
