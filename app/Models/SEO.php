<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    protected $table = 'seos';
    protected $fillable = [
        'page_url',
        'script',
    ];

    // Disable timestamps if not needed
    public $timestamps = true;
}
