@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.product.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    {{-- <tr>
                        <th>
                            {{ trans('cruds.product.fields.id') }}
                        </th>
                        <td>
                            {{ $product->id }}
                        </td>
                    </tr> --}}
                    <tr>
                        <th class="w-25">
                            {{ trans('cruds.product.fields.name') }}
                        </th>
                        <td>
                            {{ $product->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.code') }}
                        </th>
                        <td>
                            {{ $product->code }}
                        </td>
                    </tr>
                      <tr>
                        <th>
                            {{ trans('cruds.product.fields.price') }}
                        </th>
                        <td>
                            {{ $product->price ? config('app.currency').$product->price : '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.category_id') }}
                        </th>
                        <td>
                            {{ $product->category->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.subcategory_id') }}
                        </th>
                        <td>
                            {{ $product->subcategory->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.status') }}
                        </th>
                        <td>
                            {{ $product->is_active == 1 ? 'Active' : 'Inactive' }}
                            {{ $product->is_featured == 1 ? ', Featured' : '' }}
                            {{ $product->is_latest == 1 ? ', Latest' : '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.short_desc') }}
                        </th>
                        <td>
                            {{ $product->short_desc ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.long_desc') }}
                        </th>
                        <td>
                            {{ $product->long_desc ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.featured_image') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/product/'. $product->featured_image) }}" alt="" class="w-50 p-3">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.other_images') }}
                        </th>
                        <td>
                            @foreach (json_decode($product->other_images) as $key => $image)
                                <img src="{{ asset('images/product/'. $image) }}" alt="" class="w-25 p-3">
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection