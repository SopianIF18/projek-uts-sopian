<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class D111811060_news extends Model
{
    use HasFactory;
    protected $fillable =[
        'title', 'img_url', 'sub_desc', 'desc', 'timetamps'
    ];
}
