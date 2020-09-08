<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'code', 'price', 'short_desc', 'long_desc', 'featured_image', 'other_images', 'category_id', 'subcategory_id', 'is_featured', 'is_latest', 'is_active'];

    public function category()
    {
        return $this->belongsTo('App\Admin\Category', 'category_id', 'id');
    }

    public function subCategory()
    {
        return $this->belongsTo('App\Admin\SubCategory', 'subcategory_id', 'id');
    }

    public static function active()
    {
    return self::where('is_active', 1);
    }

    public static function featured()
    {
    return self::active()->where('is_featured', 1);
    }

    public static function latest()
    {
    return self::active()->where('is_latest', 1);
    }

}
