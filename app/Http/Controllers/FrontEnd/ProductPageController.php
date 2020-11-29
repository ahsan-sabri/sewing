<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Admin\Category;
use App\Admin\SubCategory;
use App\Admin\Product;

class ProductPageController extends Controller
{
    public function index($category = null, $subcategory = null)
    {   
        // dd($category, $subcategory);
        $data = [];
        $data['category'] = $category;
        $data['subcategory'] = $subcategory;
        $data['categories'] = Category::all();
        $data['subcategories'] = SubCategory::all();
        $products = new Product();

        if ($category) {
            $products = $products->where('category_id', (int) $category);

            if ($subcategory) {
                $products = $products->where('category_id', (int) $category)->where('subcategory_id', (int) $subcategory);
            }
        }

        $data['products'] = $products->paginate(9);
        $data['featured_products'] = Product::featured()->inRandomOrder()->limit(4)->get();

        return view('frontend.products', $data);
    }

    public function show($id)
    {
        $data = [];
        $data['product'] = Product::find($id);
        $data['categories'] = Category::all();
        $data['subcategories'] = SubCategory::all();
        $data['featured_products'] = Product::featured()->inRandomOrder()->limit(4)->get();
        $data['related_products'] = $data['product']->category->products->where('id', '!=', $id)->shuffle()->take(3);
        $data['other_images'] = json_decode($data['product']->other_images, 2);

        return view('frontend.singleproduct', $data);
    }
}
