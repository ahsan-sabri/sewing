<!--footer-->
<div class="footer">
    
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
                <h6>Categories</h6>
                <ul>
                    <li><a href="products.html">Curabitur sapien</a></li>
                    <li><a href="single.html">Dignissim purus</a></li>
                    <li><a href="men.html">Tempus pretium</a></li>
                    <li><a href="products.html">Dignissim neque</a></li>
                    <li><a href="single.html">Ornared id aliquet</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
                <h6>Feature Projects</h6>
                <ul>
                    <li><a href="products.html">Dignissim purus</a></li>
                    <li><a href="men.html">Curabitur sapien</a></li>
                    <li><a href="single.html">Tempus pretium</a></li>
                    <li><a href="men.html">Dignissim neque</a></li>
                    <li><a href="products.html">Ornared id aliquet</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-bottom-cate animated wow fadeInRight" data-wow-delay=".5s">
                <h6>Top Brands</h6>
                <ul>
                    <li><a href="products.html">Tempus pretium</a></li>
                    <li><a href="single.html">Curabitur sapien</a></li>
                    <li><a href="men.html">Dignissim purus</a></li>
                    <li><a href="single.html">Dignissim neque</a></li>
                    <li><a href="men.html">Ornared id aliquet</a></li>


                </ul>
            </div>
            <div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
                <h6>Our Address</h6>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 12th Avenue, 5th
                        block, <span>Sydney.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a
                            href="mailto:info@example.com">info@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2016 Youth Fashion
                . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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
