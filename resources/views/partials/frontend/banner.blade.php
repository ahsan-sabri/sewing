<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>{{ $banner->banner_text1 }}</h1>
                <h2>{{ $banner->banner_text2 }}</h2>
                <div class="d-lg-flex">
                    <a href="#about" class="btn-get-started scrollto">Meet us</a>
                    {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q"
                        class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i
                            class="icofont-play-alt-2"></i></a> --}}
                </div>
            </div>
            {{-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in"
                data-aos-delay="200">
                <img src="{{ asset('images/banner/' . $banner->banner_image) }}" class="img-fluid animated" alt="">
            </div> --}}
            <ul class="gallery-slideshow col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200"
                style="background: transparent">
                <li>
                    <img src="{{ asset('images/banner/' . $banner->banner_image) }}" class="img-fluid" alt="">
                </li>
                <li>
                    <img src="{{ asset('images/banner/' . $banner->banner_image) }}" class="img-fluid" alt="">
                </li>
                <li>
                    <img src="{{ asset('images/banner/' . $banner->banner_image) }}" class="img-fluid" alt="">
                </li>
            </ul>
        </div>
    </div>

</section><!-- End Hero -->
