<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Admin\Product;
use App\Admin\Category;
use App\Admin\SubCategory;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function subcategoryFromCategory(Request $request)
    {
        // dd($request->all());
        $subcategory = Category::find((int) $request->category_id)->subcategories;

        return response()->json($subcategory);
    }
}
