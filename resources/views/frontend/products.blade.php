@extends('layouts.frontend')

@section('styles')
    @parent
    <style>
        .menu-drop > li > a {
            display: inline;
        }
        .menu-drop > li > span > a {
            width: 100%;
            margin: 0.3em 0;
            display: inline-block;
            position: relative;
            color: #B2B2B2;
            font-size: 0.9em;
            text-decoration: none;
            width: 50%
        }
        .featured_zero {
            margin: 0.5em 0;
            color: #B2B2B2;
        }
    </style>

@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>

                @if ($category)
                    <li><a href="{{ url('/products') }}">Products</a></li>
                    
                    @if ($subcategory)
                        <li>
                            <a href="{{ url('products/'. (int)$category) }}">
                                {{ $categories->where('id', (int)$category)->first()->name }}
                            </a>
                        </li>
                        <li class="active">
                            {{ $subcategories->where('id', (int)$subcategory)->first()->name }}
                        </li>
                    @else
                        <li class="active">
                            {{ $categories->where('id', (int)$category)->first()->name }}
                        </li>
                    @endif
                @else
                    <li class="active">Products</li>
                @endif

                
            </ol>
        </div>
    </div>
    <!--content-->
    <div class="products">
        <div class="container">
            <h2>Products</h2>
            <div class="col-md-3">
                <!--categories-->
                <div class=" rsidebar span_1_of_left">
                    <h3 class="cate">Categories</h3>
                    <ul class="menu-drop">
                        @foreach ($categories as $category)
                            <li class="">
                                <span><a href="{{ url('products/'.$category->id) }}">{{ $category->name }}</a></span>
                                <a href="">
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
                <div class="product-bottom">
                    <h3 class="cate">Featured Products</h3>
                    @if ($featured_products->count() > 0)
                        @foreach ($featured_products as $product)
                            <div class="product-go">
                                <div class=" fashion-grid">
                                    <a href="{{ url('product/details/'. $product->id) }}">
                                        <img class="img-responsive " src="{{ asset('/images/product/'. $product->featured_image) }}" alt="">
                                    </a>
                                </div>
                                <div class=" fashion-grid1">
                                    <h6 class="best2"><a href="{{ url('product/details/'. $product->id) }}">{{ $product->name }}</a></h6>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        @endforeach
                    @else
                        <h5 class="featured_zero">No featured items.</h3>    
                    @endif
                    
                    
                    
                </div>

                <!--//seller-->
                <!--tag-->
                <div class="tag">
                    <h3 class="cate">Tags</h3>
                    <div class="tags">
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">dress</a></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 product-bottom">
                <div class="content-top1">
                    @foreach ($products as $product)
                        <div class="col-md-4 col-md4" style="margin-bottom: 30px;">
                            <div class="col-md1 simpleCart_shelfItem">
                                <a href="{{ url('product/details/'. $product->id) }}">
                                    <img class="img-responsive" src="{{ asset('/images/product/'. $product->featured_image) }}" alt="" />
                                </a>
                                <h3><a href="{{ url('product/details/'. $product->id) }}">{{ $product->name }}</a></h3>
                                <div class="price hidden">
                                    <h5 class="item_price">$300</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="clearfix"> </div>
                </div>

                {{ $products->links() }}
            </div>
            
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//content-->
@endsection

@section('scripts')
    @parent

@endsection
