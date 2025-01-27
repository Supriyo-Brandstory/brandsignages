<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_sub_category_id',
        'title',
        'content',
        'image',
        'slug',
        'topic',
        'reding_time',
    ];

    public function subCategory()
    {
        // return $this->belongsTo(BlogSubCategory::class);
        return $this->belongsTo(BlogSubCategory::class, 'blog_sub_category_id', 'id');
    }
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title, '-');
            }
        });
    }
}
