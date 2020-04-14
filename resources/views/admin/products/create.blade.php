@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.product.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route("admin.products.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- name --}}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">{{ trans('cruds.product.fields.name') }}*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', '') }}" required>
                    @if($errors->has('name'))
                        <em class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.name_helper') }}
                    </p>
                </div>
                {{-- code --}}
                <div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
                    <label for="code">{{ trans('cruds.product.fields.code') }}*</label>
                    <input type="text" id="code" name="code" class="form-control" value="{{ old('code', '') }}" required>
                    @if($errors->has('code'))
                        <em class="invalid-feedback">
                            {{ $errors->first('code') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.code_helper') }}
                    </p>
                </div>
                {{-- category --}}
                <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                    <label for="category_id">
                        {{ trans('cruds.product.fields.category_id') }}*
                    </label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $id => $categories)
                            <option value="{{ $id }}" {{ (old('category_id') == $id) ? 'selected' : '' }}>{{ $categories }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('category_id'))
                        <em class="invalid-feedback">
                            {{ $errors->first('category_id') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.category_id_helper') }}
                    </p>
                </div>

                {{-- subcategory --}}
                <div class="form-group {{ $errors->has('subcategory_id') ? 'has-error' : '' }}">
                    <label for="subcategory_id">
                        {{ trans('cruds.product.fields.subcategory_id') }}
                    </label>
                    <select name="subcategory_id" id="subcategory_id" class="form-control">
                        <option value="">-- Select Subcategory --</option>
                        @foreach($subcategories as $id => $subcategory)
                            <option value="{{ $id }}" {{ (old('subcategory_id') == $id) ? 'selected' : '' }}>{{ $subcategory }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('subcategory_id'))
                        <em class="invalid-feedback">
                            {{ $errors->first('subcategory_id') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.subcategory_id_helper') }}
                    </p>
                </div>

                {{-- featured_image --}}
                <div class="form-group {{ $errors->has('featured_image') ? 'has-error' : '' }}">
                    <label for="featured_image">{{ trans('cruds.product.fields.featured_image') }}*</label>
                    <input type="file" id="featured_image" name="featured_image" class="form-control" value="{{ old('featured_image', '') }}" required>
                    @if($errors->has('featured_image'))
                        <em class="invalid-feedback">
                            {{ $errors->first('featured_image') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.featured_image_helper') }}
                    </p>
                </div>

                {{-- other_images --}}
                <div class="form-group  {{ $errors->has('other_images') ? 'has-error' : '' }}">
                    {{-- label --}}
                    <label for="other_images">{{ trans('cruds.product.fields.other_images') }}</label>
                    {{-- default row --}}
                    <div class="row">
                        {{-- input field --}}
                        <div class="col-sm-12">
                            <input type="file" id="other_images" name="other_images[]" class="form-control" value="">
                        </div>
                    </div>
                    {{-- wrapper for image input --}}
                    <div class="field_wrapper">
                        {{-- this div is for new input row --}}
                    </div>
                    {{-- add button for more image --}}
                    <div class="row pt-2">
                        <div class="col-sm-1">
                            <a href="javascript:void(0);" class="add_button btn btn-success">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>

                    @if($errors->has('other_images'))
                        <em class="invalid-feedback">
                            {{ $errors->first('other_images') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.other_images_helper') }}
                    </p>
                </div>

                {{-- price --}}
                <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                    <label for="price">{{ trans('cruds.product.fields.price') }}</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{ old('price', '') }}">
                    @if($errors->has('price'))
                        <em class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.price_helper') }}
                    </p>
                </div>

                {{-- short desc --}}
                <div class="form-group {{ $errors->has('short_desc') ? 'has-error' : '' }}">
                    <label for="short_desc">{{ trans('cruds.product.fields.short_desc') }}</label>
                    <input type="text" id="short_desc" name="short_desc" class="form-control" value="{{ old('short_desc', '') }}">
                    @if($errors->has('short_desc'))
                        <em class="invalid-feedback">
                            {{ $errors->first('short_desc') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.short_desc_helper') }}
                    </p>
                </div>

                {{-- long desc --}}
                <div class="form-group {{ $errors->has('long_desc') ? 'has-error' : '' }}">
                    <label for="long_desc">{{ trans('cruds.product.fields.long_desc') }}</label>
                    <input type="text" id="long_desc" name="long_desc" class="form-control" value="{{ old('long_desc', '') }}">
                    @if($errors->has('long_desc'))
                        <em class="invalid-feedback">
                            {{ $errors->first('long_desc') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.long_desc_helper') }}
                    </p>
                </div>

                {{-- status --}}
                <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                    <label for="status">{{ trans('cruds.product.fields.status') }}</label>
                    <div class="form-check" id="status">
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="checkbox" id="is_featured" name="is_featured" class="form-check-input" value="1">
                                <label for="is_featured" class="form-check-label">Featured</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" id="is_latest" name="is_latest" class="form-check-input" value="1">
                                <label for="is_latest" class="form-check-label">Latest</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" id="is_active" name="is_active" class="form-check-input" value="1" checked>
                                <label for="is_active" class="form-check-label">Active</label>
                            </div>
                        </div>
                    </div>

                    @if($errors->has('status'))
                        <em class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.status_helper') }}
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
    <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="row pt-2"><div class="col-sm-11"><input type="file" name="other_images[]" value="" class="form-control"/></div><div class="col-sm-1 text-right"><a href="javascript:void(0);" class="remove_button btn btn-danger"><i class="fas fa-minus"></i></a></div></div>'; //New input field row
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
@endsection
