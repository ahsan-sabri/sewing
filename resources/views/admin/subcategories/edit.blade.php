@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.subcategory.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.subcategories.update", [$subcategory->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- name --}}
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.subcategory.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($subcategory) ? $subcategory->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.subcategory.fields.name_helper') }}
                </p>
            </div>
            {{-- slug --}}
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="slug">{{ trans('cruds.subcategory.fields.slug') }}*</label>
                <input type="text" id="code" name="slug" class="form-control" value="{{ old('slug', isset($subcategory) ? $subcategory->slug : '') }}" required>
                @if($errors->has('slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.subcategory.fields.slug_helper') }}
                </p>
            </div>
            {{-- category --}}
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                <label for="category_id">
                    {{ trans('cruds.subcategory.fields.category_id') }}*
                </label>
                <select name="category_id" id="category_id" class="form-control" required>
                    @foreach($categories as $id => $categories)
                        <option value="{{ $id }}" {{ isset($subcategory) && $subcategory->category->id == $id ? 'selected' : '' }}>{{ $categories }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="category_id" id="category_id_hidden" value="{{ $subcategory->category->id }}" disabled/>
                @if($errors->has('category_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('category_id') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.subcategory.fields.category_id_helper') }}
                </p>
            </div>

            {{-- description --}}
            <div class="form-group {{ $errors->has('desc') ? 'has-error' : '' }}">
                <label for="desc">{{ trans('cruds.subcategory.fields.desc') }}*</label>
                <input type="text" id="desc" name="desc" class="form-control" value="{{ old('desc', isset($subcategory) ? $subcategory->desc : '') }}">
                @if($errors->has('desc'))
                    <em class="invalid-feedback">
                        {{ $errors->first('desc') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.subcategory.fields.desc_helper') }}
                </p>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    var hasProducts = {{ json_encode($subcategory->hasProducts()) }};
    // console.log(hasProducts);
    if (hasProducts) {
        $('#category_id').prop("disabled", true);
        $('#category_id_hidden').prop("disabled", false);
    }
        
</script>
@endsection
