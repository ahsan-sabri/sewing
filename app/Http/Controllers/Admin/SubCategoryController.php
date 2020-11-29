<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Category;
use App\Admin\SubCategory;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Http\Requests\Admin\SubCategoryRequest;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the sub category.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        $subcategories = SubCategory::all();

        return view('admin.subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new sub category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        $categories = Category::get()->pluck('name', 'id');

        return view('admin.subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created sub category in storage.
     *
     * @param  App\Http\Requests\Admin\SubCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        SubCategory::create($request->all());

        return redirect()->route('admin.subcategories.index');
    }

    /**
     * Display the specified sub category.
     *
     * @param  \App\Admin\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subcategory)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        return view('admin.subcategories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified sub category.
     *
     * @param  \App\Admin\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        $categories = Category::get()->pluck('name', 'id');

        return view('admin.subcategories.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified sub category in storage.
     *
     * @param  \App\Http\Requests\SubCategoryRequest  $request
     * @param  \App\Admin\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryRequest $request, SubCategory $subcategory)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        $subcategory->update($request->all());

        return redirect()->route('admin.subcategories.index');
    }

    /**
     * Remove the specified sub category from storage.
     *
     * @param  \App\Admin\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }
        
        $subcategory->delete();

        return redirect()->route('admin.subcategories.index');
    }

    /**
    * Delete all selected sub category at once.
    *
    * @param Request $request
    */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }
        SubCategory::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
