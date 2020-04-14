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

    // public function images()
    // {
    //     return $this->hasMany('App\Admin\ProductImage', 'product_image');
    // }

}
