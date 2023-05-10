<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cauhoi extends Model
{
    use HasFactory;
    public $table = "cau_hoi";
    protected $fillable = [
        'id',
        'noi_dung',
    ];
}
