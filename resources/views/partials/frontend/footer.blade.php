<div class="footer-w3layouts">
    <div class="container">
        <div class="col-md-4 footer-grids">
            <h3>Services</h3>
            <ul class="b-nav">
                <li><a class="scroll" href="index.html">Home</a></li>
                <li><a class="scroll" href="#about" >About</a></li>
                <li><a class="scroll" href="#works">Latest Works</a></li>
                <li><a class="scroll" href="#services">Services</a></li>
                <li><a class="scroll" href="#experts">Experts</a></li>
            </ul>
        </div>
        <div class="col-md-4 footer-grids">
            <h3>About Sewing</h3>
            <p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
            <div class="botton-agileits">
                <a href="#" class="hvr-rectangle-in" data-toggle="modal" data-target="#myModal1" >know more</a>
            </div>
            <ul class="agileits_social_list">
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="col-md-4 footer-grids">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7618840525743!2d-0.12205158417192101!3d51.5175843796368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b3507bfbc71%3A0x34ba2cc6c33fe56f!2sKrispy+Kreme!5e0!3m2!1sen!2sin!4v1490078766787"></iframe>
        </div>
    </div>
</div>
<!-- //contact -->
<!--footer-->
<div class="copy">
    <div class="container">
        <p>© 2017 Sewing . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
    </div>
</div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="{{ asset('frontEnd/homepage/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('frontEnd/homepage/js/modernizr.js') }}"></script>	<!--banner text -->
<script src="{{ asset('frontEnd/homepage/js/main.js') }}"></script><!--banner text -->
<!-- stats -->
<script src="{{ asset('frontEnd/homepage/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontEnd/homepage/js/jquery.countup.js') }}"></script>
<script>
$('.counter').countUp();
</script>
<!-- //stats -->
<!-- Lightbox -->
<script src="{{ asset('frontEnd/homepage/js/simpleLightbox.js') }}"></script>
<script>
$('.w3layouts_gallery_grid a').simpleLightbox();
</script>
<!-- //Lightbox -->
<script src="{{ asset('frontEnd/homepage/js/SmoothScroll.min.js') }}"></script>
<!-- smooth scrolling -->
<script type="text/javascript">
$(document).ready(function() {
    /*
    var defaults = {
    containerID: 'toTop', // fading element id
    containerHoverID: 'toTopHover', // fading element hover id
    scrollSpeed: 1200,
    easingType: 'linear'
};
*/
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('frontEnd/homepage/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontEnd/homepage/js/easing.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
});

$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 600) {
            $("#navbar").css("background" , "#0468a5");
        }

        else{
            $("#navbar").css("background" , "rgba(255, 255, 255, 0.18)");
        }
    })
})
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('frontEnd/homepage/js/bootstrap-3.1.1.min.js') }}"></script>
@yield('scripts')
