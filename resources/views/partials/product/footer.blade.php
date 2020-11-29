<!--footer-->
<div class="footer">
    
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
                <h6>Categories</h6>
                <ul>
                    @foreach (\App\admin\Category::all() as $category)
                        <li><a href="{{ url('/products') }}">{{ $category->name }}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
                <h6>Featured Products</h6>
                <ul>
                    @foreach (\App\admin\Product::featured()->limit(5)->get() as $product)
                        <li><a href="{{ url('/details') }}">{{ $product->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 footer-bottom-cate animated wow fadeInRight" data-wow-delay=".5s">
                <h6>Latest Products</h6>
                <ul>
                    @foreach (\App\admin\Product::latest()->limit(5)->get() as $product)
                        <li><a href="{{ url('/details') }}">{{ $product->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
                <h6>Our Address</h6>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : {{ $company->address ?? '' }}</li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a
                        href="{{ 'mailto:'. $company->email ?? '' }}">{{ $company->email ?? '' }}</a>
                    </li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : {{ $company->mobile ?? '' }}</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2020 {{ $company->name ?? '' }}
                . All Rights Reserved | Developed by Ahsan Sabri </p>
        </div>
    </div>
</div>

{{-- scripts --}}
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script
    type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!-- start menu -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/simpleCart.min.js') }}"> </script>
<!-- slide -->
<script src="{{ asset('frontend/js/responsiveslides.min.js') }}"></script>
{{-- animated wow js --}}
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
{{-- magnifying pop up --}}
<script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
{{-- image zoom  --}}
<script src="{{ asset('frontend/js/imagezoom.js') }}"></script>
<!-- FlexSlider -->
<script defer src="{{ asset('frontend/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/memenu.js') }}"></script>

<script>
    ///// wow init 
    // new WOW().init();

    ///// popup zoom script 
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $(".memenu").memenu();   

        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });

    ///// slide
    $(function () {
        $("#slider").responsiveSlides({
            auto: false,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });

    $(function() {
        var menu_ul = $('.menu-drop > li > ul'),
            menu_a  = $('.menu-drop > li > a');
        menu_ul.hide();
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });
    
    });
</script>

@yield('scripts')
