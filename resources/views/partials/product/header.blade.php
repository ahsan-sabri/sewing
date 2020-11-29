<!--header-->
@php
    $route = Route::current()->action['as'];
@endphp
<div class="header navbar-fixed-top" style="background: white">
    <div class="header-top">
        <div class="container">
            <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                <h1>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/company/'. $logo) }}" alt=""  height="50">
                    </a>
                </h1>
            </div>
            <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s" style="visibility: hidden">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3>
                            <div class="total">
                                <span class="simpleCart_total"></span></div>
                            <img src="{{ asset('frontend/images/cart.png') }}" alt="" />
                        </h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                </div>
            </div>
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s" style="margin-top: 1%">
                <i class="glyphicon glyphicon-phone"></i>{{ $company->mobile ?? '' }}
            </div>
            <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
                <a class="play-icon popup-with-zoom-anim" href="javascript:;"><i
                        class="glyphicon glyphicon-search"> </i> </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container">
        <div class="head-top">
            <div class="n-avigation">

                <nav class="navbar nav_bottom" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                            data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li class="active"><a class="scroller" href="{{ $route != 'homepage' ? '/' : '#home' }}">Home</a></li>
                            <li class="dropdown mega-dropdown hidden">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<span
                                        class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu">
                                    <div class="container-fluid">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="men">
                                                <ul class="nav-list list-inline">
                                                    <li><a href="women.html"><img src="{{ asset('frontend/images/t7.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="women.html"><img src="{{ asset('frontend/images/t8.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="women.html"><img src="{{ asset('frontend/images/t9.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="women.html"><img src="{{ asset('frontend/images/t11.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="women.html"><img src="{{ asset('frontend/images/t1.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="women.html"><img src="{{ asset('frontend/images/t12.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Nav tabs -->

                                </div>
                            </li>
                            <li class="dropdown mega-dropdown hidden">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span
                                        class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu">
                                    <div class="container-fluid">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="men">
                                                <ul class="nav-list list-inline">
                                                    <li><a href="men.html"><img src="{{ asset('frontend/images/t10.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="men.html"><img src="{{ asset('frontend/images/t2.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="men.html"><img src="{{ asset('frontend/images/t3.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="men.html"><img src="{{ asset('frontend/images/t4.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="men.html"><img src="{{ asset('frontend/images/t5.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                    <li><a href="men.html"><img src="{{ asset('frontend/images/t6.jpg') }}"
                                                                class="img-responsive" alt="" /></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Nav tabs -->

                                </div>
                            </li>
                            <li><a href="{{ url('/products') }}">Products</a></li>
                            @if ($route == 'homepage')
                                <li class=""><a class="scroller" href="#about">About</a></li>
                                <li class=""><a class="scroller" href="#service">Services</a></li>
                                <li class="last"><a class="scroller" href="#contact">Contact</a></li>
                            @endif
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    
                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>