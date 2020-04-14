<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Category;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
    /**
    * Display a listing of the category.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        if (! Gate::allows('categories_manage')) {
            return abort(401);
        }

        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
    * Show the form for creating a new category.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        if (! Gate::allows('categories_manage')) {
            return abort(401);
        }

        return view('admin.categories.create');
    }

    /**
    * Store a newly created category in storage.
    *
    * @param  App\Http\Requests\Admin\CategoryRequest  $request
    * @return \Illuminate\Http\Response
    */
    public function store(CategoryRequest $request)
    {
        if (! Gate::allows('categories_manage')) {
            return abort(401);
        }

        Category::create($request->all());

        return redirect()->route('admin.categories.index');
    }

    /**
    * Display the specified category.
    *
    * @param  \App\Admin\Category  $category
    * @return \Illuminate\Http\Response
    */
    public function show(Category $category)
    {
        if (! Gate::allows('categories_manage')) {
            return abort(401);
        }

        return view('admin.categories.show', compact('category'));
    }

    /**
    * Show the form for editing the specified product.
    *
    * @param  \App\Admin\Category  $category
    * @return \Illuminate\Http\Response
    */
    public function edit(Category $category)
    {
        if (! Gate::allows('categories_manage')) {
            return abort(401);
        }

        return view('admin.categories.edit', compact('category'));
    }

    /**
    * Update the specified category in storage.
    *
    * @param  \App\Http\Requests\CategoryRequest  $request
    * @param  \App\Admin\Category  $category
    * @return \Illuminate\Http\Response
    */
    public function update(CategoryRequest $request, Category $category)
    {
        if (! Gate::allows('categories_manage')) {
            return abort(401);
        }

        $category->update($request->all());

        return redirect()->route('admin.categories.index');
    }

    /**
    * Remove the specified category from storage.
    *
    * @param  \App\Admin\Category  $category
    * @return \Illuminate\Http\Response
    */
    public function destroy(Category $category)
    {
        if (! Gate::allows('categories_manage')) {
            return abort(401);
        }

        $category->delete();

        return redirect()->route('admin.categories.index');
    }

    /**
    * Delete all selected category at once.
    *
    * @param Request $request
    */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('categories_manage')) {
            return abort(401);
        }
        Category::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
