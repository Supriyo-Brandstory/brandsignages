<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sitemap extends Model
{
    
    protected $fillable = [
        'id',        // Allow mass assignment for the primary key
        'sitemap',   // Allow mass assignment for the sitemap content
    ];
}
