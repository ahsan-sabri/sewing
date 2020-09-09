<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Product;
use App\Admin\Category;
use App\Admin\SubCategory;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreProductsRequest;
use App\Http\Requests\Admin\UpdateProductsRequest;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
    * Display a listing of the products.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        if (! Gate::allows('products_manage')) {
            return abort(401);
        }

        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    /**
    * Show the form for creating a new product.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        if (! Gate::allows('products_manage')) {
            return abort(401);
        }

        $categories = Category::get()->pluck('name', 'id');
        $subcategories = Subcategory::get()->pluck('name', 'id');

        return view('admin.products.create', compact('categories', 'subcategories'));
    }

    /**
    * Store a newly created product in storage.
    *
    * @param  App\Http\Requests\Admin\StoreProductsRequest  $request
    * @return \Illuminate\Http\Response
    */
    public function store(StoreProductsRequest $request)
    {
        if (! Gate::allows('products_manage')) {
            return abort(401);
        }

        $create = $request->all();

        // featured image processing
        $featuredImage = $request->file('featured_image');
        $featuredImageFileName = Str::random(10) . '.' . $featuredImage->getClientOriginalExtension();
        $destinationPath = base_path() . '/public/images/product/';
        $featuredImage->move($destinationPath, $featuredImageFileName);
        $create['featured_image'] = $featuredImageFileName;

        // other image processing
        if ($request->file('other_images')) {
            $otherImages = $request->file('other_images');
            foreach ($otherImages as $key => $image) {
                $filename = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move($destinationPath, $filename);
                $images[] = $filename;
            }

            $create['other_images'] = json_encode($images);
        }

        Product::create($create);

        return redirect()->route('admin.products.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Admin\Product  $product
    * @return \Illuminate\Http\Response
    */
    public function show(Product $product)
    {
        if (! Gate::allows('products_manage')) {
            return abort(401);
        }

        return view('admin.products.show', compact('product'));
    }

    /**
    * Show the form for editing the specified product.
    *
    * @param  \App\Admin\Product  $product
    * @return \Illuminate\Http\Response
    */
    public function edit(Product $product)
    {
        if (! Gate::allows('products_manage')) {
            return abort(401);
        }

        $categories = Category::get()->pluck('name', 'id');
        // $subcategories = Subcategory::get()->pluck('name', 'id');
        $subcategories = $product->category->subcategories->pluck('name', 'id');
        // dd($subcategories);

        return view('admin.products.edit', compact('product','categories','subcategories'));
    }

    /**
    * Update the specified product in storage.
    *
    * @param  \App\Http\Requests\UpdateProductsRequest  $request
    * @param  \App\Admin\Product  $product
    * @return \Illuminate\Http\Response
    */
    public function update(UpdateProductsRequest $request, Product $product)
    {
        if (! Gate::allows('products_manage')) {
            return abort(401);
        }

        $update = $request->all();
        $imagePath = base_path() . '/public/images/product/';

        if ($request->file('featured_image')) {
            // remove previous if exist
            if($product->featured_image != null){
                $oldFile = $imagePath . $product->featured_image;
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }
            // insert new
            $newfile = $request->file('featured_image');
            $newFilename = Str::random(10) . '.' . $newfile->getClientOriginalExtension();
            $newfile->move($imagePath, $newFilename);
            $update['featured_image'] = $newFilename;
        }

        // other images processing
        if ($request->file('other_images')) {
            // remove previous
            if($product->other_images != null){
                $oldOtherFiles = json_decode($product->other_images);
                foreach ($oldOtherFiles as $key => $file) {
                    $oldOtherFile = $imagePath . $file;
                    if (file_exists($oldOtherFile)) {
                        unlink($oldOtherFile);
                    }
                }
            }
            // insert new
            $otherImages = $request->file('other_images');
            foreach ($otherImages as $key => $image) {
                $filename = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move($imagePath, $filename);
                $images[] = $filename;
            }

            $update['other_images'] = json_encode($images);
        }

        // update product
        $product->update($update);
        // update status
        $request['is_featured'] == null ? $product->update(['is_featured' => 0]) : '';
        $request['is_latest'] == null ? $product->update(['is_latest' => 0]) : '';
        $request['is_active'] == null ? $product->update(['is_active' => 0]) : '';

        return redirect()->route('admin.products.index');
    }

    /**
    * Remove the specified product from storage.
    *
    * @param  \App\Admin\Product  $product
    * @return \Illuminate\Http\Response
    */
    public function destroy(Product $product)
    {
        if (! Gate::allows('products_manage')) {
            return abort(401);
        }

        // delete product images
        $imagePath = base_path() . '/public/images/product/';

        if($product->featured_image != null){
            $featuredImage = $imagePath . $product->featured_image;
            if (file_exists($featuredImage)) {
                unlink($featuredImage);
            }
        }

        if($product->other_images != null){
            $otherImages = json_decode($product->other_images);
            foreach ($otherImages as $key => $image) {
                $otherImage = $imagePath . $image;
                if (file_exists($otherImage)) {
                    unlink($otherImage);
                }
            }
        }

        // delete product
        $product->delete();

        return redirect()->route('admin.products.index');
    }

    /**
    * Delete all selected products at once.
    *
    * @param Request $request
    */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('products_manage')) {
            return abort(401);
        }

        $products = Product::whereIn('id', request('ids'))->get();
        $imagePath = base_path() . '/public/images/product/';

        foreach ($products as $key => $product) {
            // delete product images
            if($product->featured_image != null){
                $featuredImage = $imagePath . $product->featured_image;
                if (file_exists($featuredImage)) {
                    unlink($featuredImage);
                }
            }

            if($product->other_images != null){
                $otherImages = json_decode($product->other_images);
                foreach ($otherImages as $key => $image) {
                    $otherImage = $imagePath . $image;
                    if (file_exists($otherImage)) {
                        unlink($otherImage);
                    }
                }
            }

        } // end loop

        // delete products
        Product::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
