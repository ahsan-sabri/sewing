<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id','name', 'slug', 'desc'];

    public function subcategories()
    {
        return $this->hasMany('App\Admin\SubCategory', 'category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany('App\Admin\Product', 'category_id', 'id');
    }

}
