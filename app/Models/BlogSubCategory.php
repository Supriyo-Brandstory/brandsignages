<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
class BlogSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'description',
        'blog_category_id',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function category()
    {
        // return $this->belongsTo(BlogCategory::class);
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($subCategory) {
            if (empty($subCategory->slug)) {
                $subCategory->slug = Str::slug($subCategory->name, '-');
            }
        });
    }
  
}
