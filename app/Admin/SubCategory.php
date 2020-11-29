<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategories';
    protected $fillable = ['id','name', 'slug', 'category_id', 'desc'];

    public function category()
    {
        return $this->belongsTo('App\Admin\Category', 'category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany('App\Admin\Product', 'subcategory_id', 'id');
    }

    public function hasProducts()
    {
        return $this->products->count() ? true : false;
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($subcategory) {
            $subcategory->products->each(function ($product) {
                $product->delete();
            });
        });
    } 

}
