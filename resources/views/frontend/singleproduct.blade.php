@extends('layouts.product')

@section('styles')
    @parent
    <style>
        .related_zero {
            margin: 0.5em 0;
            color: #B2B2B2;
        }
        .related-pro {
            font-size: 1.5em;
            color: #fa03bb;
            line-height: 1.5em;
            font-family: 'Poiret One', cursive;
            font-weight: 700;
            margin-top: 50px;
        }
        .flex-control-thumbs li {
            height: 130px;
        }

        .flex-control-thumbs li img {
            display: flex;
            width: 100%;
            height: 100%;
        }
        .thumb-image {
            height: 400px;
        }
        .flexslider .slides img {
            display: flex;
            width: 100%;
            height: 100%;
        }
    </style>

@endsection

@section('content')
    <div class="breadcrumbs" style="margin-top: 160px">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li><a href="{{ url('products') }}">Products</a></li>
                <li><a href="{{ url('products/'.$product->category->id) }}">{{ $product->category->name }}</a></li>
                @if ($product->subcategory)
                    <li><a href="{{ url('products/'.$product->category->id.'/'.$product->subcategory->id) }}">{{ $product->subcategory->name }}</a></li>
                @endif
                <li class="active">{{ $product->name }}</li>
            </ol>
        </div>
    </div>
    <div class="single">

        <div class="container">
            <div class="col-md-3">
                <!--categories-->
                <div class=" rsidebar span_1_of_left">
                    <h3 class="cate">Categories</h3>
                    <ul class="menu-drop">
                        @foreach ($categories as $category)
                            <li class="">
                                <span><a href="{{ url('products/'.$category->id) }}">{{ $category->name }}</a></span>
                                <a href="" class="@if (!$category->subcategories->count()) hidden @endif">
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                </a>
                                <ul class="cute">
                                    @foreach ($category->subcategories as $item)
                                        <li class=""><a href="{{ url('products/'.$category->id. '/' .$item->id) }}">{{ $item->name }} </a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!--initiate accordion-->

                <!--//menu-->
                <!--seller-->
                {{-- <div class="product-bottom">
                    <h3 class="cate">Featured Products</h3>
                    @if ($featured_products->count() > 0)
                        @foreach ($featured_products as $featured_product)
                            <div class="product-go">
                                <div class=" fashion-grid">
                                    <a href="{{ url('product/details/' . $featured_product->id) }}">
                                        <img class="img-responsive " src="{{ asset('/images/product/' . $featured_product->featured_image) }}" alt="">
                                    </a>
                                </div>
                                <div class=" fashion-grid1">
                                    <h6 class="best2">
                                        <a href="{{ url('product/details/' . $featured_product->id) }}">{{ $featured_product->name }}</a>
                                    </h6>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        @endforeach
                    @else
                        <h5 class="featured_zero">No featured items.</h5>
                    @endif



                </div> --}}

                <!--//seller-->
                <!--tag-->
                {{-- <div class="tag"></div> --}}
            </div>
            <div class="col-md-9">
                <div class="col-md-5 grid">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset('/images/product/' . $product->featured_image) }}">
                                <div class="thumb-image"> <img src="{{ asset('/images/product/' . $product->featured_image) }}"
                                        data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            @if ($other_images)
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($other_images as $other_image)
                                    <li data-thumb="{{ asset('/images/product/' . $other_image) }}">
                                        <div class="thumb-image"> <img src="{{ asset('/images/product/' . $other_image) }}"
                                                data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
                                    @php
                                        $i++;
                                        if ($i == 2) {
                                            break;
                                        }
                                    @endphp
                                @endforeach
                            @endif
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 single-top-in">
                    <div class="single-para simpleCart_shelfItem">
                        <h2>{{ $product->name }}</h2>
                        <p>{{ $product->short_desc }}</p>
                        {{-- <div class="star-on">
                            <ul>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            </ul>
                            <div class="review">
                                <a href="#"> 3 reviews </a>/
                                <a href="#"> Write a review</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div> --}}

                        <label class="add-to item_price hidden">$70.5</label>

                        <div class="available">
                            <h6>Available Options :</h6>
                            <ul>

                                <li>Size:<select>
                                        <option>Large</option>
                                        <option>Medium</option>
                                        <option>small</option>
                                        <option>Large</option>
                                        <option>small</option>
                                    </select></li>
                                <li>Cost:
                                    <select>
                                        <option>U.S.Dollar</option>
                                        <option>Euro</option>
                                    </select></li>
                            </ul>
                        </div>
                        <a href="javascript:;" class="cart item_add show_details">More details</a>
                        <p class="long_desc" style="display:none; margin-top: 10px">{{ $product->long_desc }}</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
                {{-- <h2 class="related-pro text-center">Related Products</h2>
                <div class="content-top1">
                    @if ($related_products->count())

                        @foreach ($related_products as $item)
                            <div class="col-md-4 col-md4">
                                <div class="col-md1 simpleCart_shelfItem">
                                    <div class="image-container">
                                        <a href="{{ url('product/details/' . $item->id) }}">
                                            <img class="img-responsive card-image" src="{{ asset('/images/product/' . $item->featured_image) }}" alt="" />
                                        </a>
                                    </div>
                                    
                                    <h3><a href="{{ url('product/details/' . $item->id) }}">{{ $item->name }}</a></h3>
                                    <div class="price hidden">
                                        <h5 class="item_price">$300</h5>
                                        <a href="#" class="item_add">Add To Cart</a>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @else
                        <h5 class="related_zero">No related items.</h5>

                    @endif
                    

                    <div class="clearfix"> </div>
                </div> --}}
            </div>
            <!----->
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $('.show_details').click(function () {
            $('.long_desc').slideToggle(200);
        })
    </script>

@endsection
