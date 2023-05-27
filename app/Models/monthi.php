<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monthi extends Model
{
    use HasFactory;
    public $table = "mon_thi";
    protected $fillable = [
        'id',
        'ten_mon',
    ];
}
