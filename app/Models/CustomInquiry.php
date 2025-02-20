<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'height',
        'width',
        'name',
        'email',
        'phone',
        'image',
    ];
}
