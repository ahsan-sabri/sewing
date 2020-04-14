@extends('layouts.frontend')

@section('content')
    <section  class="ccontainer" style=""  >
        <div class="ccontainer chero-layers chero-styles-9959 chero-layers-2-cta percent-header-image ">
            <!--bg layer -->
            <div class="bg-layer  ">
                <div class="bg-img  bg-xs-center bg-sm-center bg-md-center "></div>
            </div>
            <!--overlay layer-->
            <div class="overlay-layer">
                <div class="container-fluid">
                    <div class="overlay-bg   bg-black "></div>
                </div>
            </div>
            <!--content layer-->
            <div class="content-layer">
                <div class="container-fluid">
                    <div class="row resp_grid grid-container-960">
                        <div class="span6 col-md-6  col-sm-7  col-xs-12 ">
                            <Section  class="ccontainer ccontainer-hero-content-cta-text" style=""  >
                                <div class="ctext">
                                    <div class="visible-xs"><br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                    <h1 style="text-align: left; font-size: 12px; line-height: 1.5; letter-spacing: 2.5px;"><span class="text-white">QUICKBOOKS CLOUD ACCOUNTING SOFTWARE<br>
                                        &nbsp;</span>
                                    </h1>
                                    <h1 style="text-align: left; font-size: 28px; line-height: 1.3;"><span class="text-white">Smarter business tools for the world’s hardest workers</span></h1>
                                    <h4 style="text-align: left;"><span class="text-white"><br>
                                        Track expenses, customise invoices, run reports <br class="hidden-xs">
                                        and more, all from one place.<br>
                                        &nbsp;</span>
                                    </h4>
                                    <div style="padding-top: 10px;">
                                        <div class="hidden-xs">
                                            <div style="padding: 0 5px; display: inline-block;"><a class="ctasecondary ctacenter" href="#" data-wa-link="hero-buynow">Buy Now &amp; Save <span class="discountPercent"></span>%<span class="visually-hidden">Buy QuickBooks Online Now and Save</span></a></div>
                                            <div style="padding: 0 5px; display: inline-block;"><a class="ctatertiary2 ctacenter" href="#" data-wa-link="hero-trial">Free 30-day Trial<span class="visually-hidden">Buy QuickBooks Online Now and Save</span></a></div>
                                        </div>
                                        <div class="visible-xs" style="text-align: center;">
                                            <div style="padding-bottom: 10px;"><a class="ctasecondary ctacenter" href="#" data-wa-link="hero-buynow">Buy Now &amp; Save <span class="discountPercent"></span>%<span class="visually-hidden">Buy QuickBooks Online Now and Save</span></a></div>
                                            <div><a class="ctatertiary2 ctacenter" href="#" data-wa-link="hero-trial">Free 30-day Trial<span class="visually-hidden">Buy QuickBooks Online Now and Save</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <Section  class="ccontainer hidden-lg hidden-md hidden-sm hidden-xs" style=""  >
                                    <div class="ccta cta-align-left"  data-qe-id="3f672903-bd5b-4549-a05d-b243712eebed"  >
                                        <a class="ctaprimary ctaleft  " href="#" data-wa-link='hero-buynow'>Buy Now & Save <span class="discountPercent"></span>%<span class='visually-hidden'>Buy QuickBooks Online Now and Save</span></a>
                                    </div>
                                    <Section  class="ccontainer" style="padding-top: 10px; padding-right: 0px; padding-bottom: 0px; "  >
                                        <div class="ctext">
                                            <p style="color: #ffffff;"><b><span>or</span> <a adhocenable="false" style="color: #2EACF3;" href="#" data-wa-link="hero-trial">Try free for 30 days</a></b></p>
                                        </div>
                                    </Section>
                                </Section>
                            </Section>
                        </div>
                        <div class="hidden-md hidden-sm hidden-xs ">
                            <section  class="ccontainer" style=""  >
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
        .chero-styles-9959 .bg-layer {
            background-color: #393a3d;
        }
        .chero-styles-9959 .overlay-bg {
            opacity: 0.25;
        }
        @media only screen and (max-width: 767px) {
            .chero-styles-9959 .bg-img {
                background-image: url("{{ asset('/frontend/images/home/480_400_GLOBAL.jpg') }}");width:480px;height:400px;
            }
            .chero-styles-9959 .overlay-bg {
                width:100%;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .chero-styles-9959 .bg-img {
                background-image: url("{{ asset('/frontend/images/home/992_400_GLOBAL3.jpg') }}");width:992px;height:400px;
            }
            .chero-styles-9959 .overlay-bg {
                width:0%;
            }
        }
        @media only screen and (min-width: 992px) {
            .chero-styles-9959 .bg-img {
                background-image: url("{{ asset('/frontend/images/home/1600_400_GLOBAL3.jpg') }}");width:1600px;height:400px;
            }
            .chero-styles-9959 .overlay-bg {
                width:0%;
            }
        }
        </style>
        <div class="ctext">
            <p class='edit-only'>Drag Hero Here.</p>
        </div>
    </section>
    <section  class="ccontainer" style=""  >
        <Section  class="ccontainer bg-white ss-section" style="" id='section-1' >
            <div class=content-container>
                <div class="ctext">
                    <h2>QuickBooks Online lets you see how<br>
                        your business is doing instantly. &nbsp;
                    </h2>
                    <p><span class="section-subheader">Learn more about our features</span></p>
                </div>
                <div class="horizontal-image-text image-text-1x1-horizontal">
                    <div class="container-fluid">
                        <div class="row resp_grid grid-container-960">
                            <div class="span7 col-md-7  col-sm-7  col-xs-12 ">
                                <div class='cimage clearfix '>
                                    <!-- If modal option is selected -->
                                    <img class="lazy cq-dd-image img-left image-scale" alt="img_row_cloud_all_devices_577_371" data-sha="ed1f9d40" data-src="{{ asset('/frontend/images/home/img_row_cloud_all_devices_577_371.png') }}"/>
                                </div>
                                <section  class="ccontainer" style=""  >
                                </section>
                            </div>
                            <div class="span5 col-md-5  col-sm-5  col-xs-12 ">
                                <div class="ctext">
                                    <p class="h1b">Work from anywhere on multiple devices</p>
                                    <p class="p2">Access and manage your books from your computer, laptop, tablet, or smartphone anytime you choose. Create access privileges so that your colleague or accountant can login and work with your data online.</p>
                                </div>
                                <Section  class="ccontainer None hidden-sm hidden-xs" style="padding-left: 40px; "  >
                                    <div class="ccta cta-align-left"  data-qe-id="0f841425-d340-4bc4-9220-01a3f5839c4b/cq-main-container/container/container_0/container/horizontal_imagetext2/cq-container0/container/cta"  >
                                        <a class="ctasecondary ctaleft  " href="#" data-wa-link='features-cloudaccounting'>Learn More</a>
                                    </div>
                                </Section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ctext">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
                <div class="horizontal-image-text image-text-1x1-horizontal">
                    <div class="container-fluid">
                        <div class="row resp_grid grid-container-960">
                            <div class="span7 col-md-7  col-sm-7  col-xs-12 col-sm-push-5">
                                <div class='cimage clearfix '>
                                    <!-- If modal option is selected -->
                                    <img class="lazy cq-dd-image img-left image-scale" alt="img_row_all_devices_invoicing_579_371" data-sha="b3efbe56" data-src="{{ asset('/frontend/images/home/img_row_all_devices_invoicing_579_371.png') }}"/>
                                </div>
                                <section  class="ccontainer" style=""  >
                                </section>
                            </div>
                            <div class="span5 col-md-5  col-sm-5  col-xs-12 col-sm-pull-7">
                                <div class="ctext">
                                    <p class="h1b">Send invoices on-the-go</p>
                                    <p>&nbsp;</p>
                                    <p class="p2">Create and send custom online invoices from any device. The QuickBooks Online Mobile app automatically stores your data in the cloud and syncs across your devices, making it easy to manage your business on-the-go.</p>
                                    <p class="p2">&nbsp;</p>
                                </div>
                                <Section  class="ccontainer None hidden-sm hidden-xs" style=""  >
                                    <div class="ccta cta-align-left"  data-qe-id="0f841425-d340-4bc4-9220-01a3f5839c4b/cq-main-container/container/container_0/container/horizontal_imagetext1/cq-container0/container/cta"  >
                                        <a class="ctasecondary ctaleft  " href="#" data-wa-link='features-invoicing'>Learn More</a>
                                    </div>
                                </Section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ctext">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
                <div class="ccta cta-align-center"  data-qe-id="0f841425-d340-4bc4-9220-01a3f5839c4b/cq-main-container/container/container_0/container/cta"  >
                    <a class="ctaprimary ctacenter" href="#" data-wa-link='features-all'>See All Features</a>
                </div>
                <div class="ctext">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </Section>
        <Section  class="ccontainer hidden-xs resp_img" style="height:436px;" >
            <div class="bg bg-charcoal-grey">
                <img class="center" alt="" data-sha="44aa214d" src="{{ asset('/frontend/images/home/img_row_testimonial_moltenwonky_1600_436.jpg') }}" style=""/>
            </div>
            <div class="grid-horizontal-image-text ifull-bleed grid_h_stars_text" id="gridh99">
                <div class="container-fluid">
                    <div class="row grid-container-960">
                        <div class="cleft col-md-5 col-md-offset-1 col-sm-6  col-xs-12 ">
                        </div>
                        <div class="cright col-md-5  col-sm-6  col-xs-12 ">
                            <div class="ctext">
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <div class="ctestimonial ">
                                    <div class="ctestimonial_rating"><span class="rating rating-4">&nbsp;</span></div>
                                </div>
                                <p style="text-align: center;"><span class="h2" style="color: #FFFFFF;">&quot;With QuickBooks, I feel like I'm on a roll. It's been totally worth it!&quot;</span></p>
                                <p>&nbsp;</p>
                                <p style="text-align: center; color: #FFFFFF;">Katie Lynn, Molten Wonky</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
            #gridh99 {
                background-color: None;
            }
            </style>
        </Section>
        <Section  class="ccontainer" style=""  >
            <div class="grid-horizontal-image-text ifull-bleed " id="gridh81">
                <div class="container-fluid">
                    <div class="row grid-container-960">
                        <div class="cleft col-md-6  col-sm-6  col-xs-12 ">
                            <div class="ctestimonial testimonial_mini">
                                <div class="row" >
                                    <div class="ctestimonial_mini_image_section col-md-4 col-sm-4 col-xs-12">
                                        <div class='cimage clearfix '>
                                            <!-- If modal option is selected -->
                                            <img class="lazy cq-dd-image img-left img-circle" alt="img_row_testimonial-ashread_140_140" data-sha="819f5927" data-src="{{ asset('/frontend/images/home/img_row_testimonial-ashread_140_140.jpg') }}"/>
                                        </div>
                                    </div>
                                    <div class="ctestimonial_reviews_section col-md-8 col-sm-8 col-xs-12">
                                        <div class="ctestimonial_review">
                                            "Before QuickBooks I dreaded the accounting side of my business. Now I can get everything done in minutes and spend time doing what I love."
                                        </div>
                                        <div class="ctestimonial_author">
                                            - Ash Read
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                            @media (max-width: 767px){
                                .testimonial_mini .row{
                                    margin-left:0px;
                                    margin-right:0px;
                                    padding:0px 20px 0px 20px;
                                }
                            }
                            </style>
                        </div>
                        <div class="cright col-md-6  col-sm-6  col-xs-12 ">
                            <div class="ctestimonial testimonial_mini">
                                <div class="row" >
                                    <div class="ctestimonial_mini_image_section col-md-4 col-sm-4 col-xs-12">
                                        <div class='cimage clearfix '>
                                            <!-- If modal option is selected -->
                                            <img class="lazy cq-dd-image img-left img-circle" alt="img_row_testimonial-barkingmad_140_140" data-sha="df38ff03" data-src="{{ asset('/frontend/images/home/img_row_testimonial-barkingmad_140_140.jpg') }}"/>
                                        </div>
                                    </div>
                                    <div class="ctestimonial_reviews_section col-md-8 col-sm-8 col-xs-12">
                                        <div class="ctestimonial_review">
                                            "We use the QuickBooks app when we’re visiting customers... we can now send a quote or invoice on the spot."
                                        </div>
                                        <div class="ctestimonial_author">
                                            - Amanda, Barking Mad
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                            @media (max-width: 767px){
                                .testimonial_mini .row{
                                    margin-left:0px;
                                    margin-right:0px;
                                    padding:0px 20px 0px 20px;
                                }
                            }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
            <style>
            #gridh81 {
                background-color: #393a3d;
            }
            </style>
        </Section>
        <Section  class="ccontainer bg-grey ss-section" style="" id='section-4' >
            <div class=content-container>
                <div class="ctext">
                    <h2>Get Started with QuickBooks today!</h2>
                </div>
                <div class="ccta cta-align-center"  data-qe-id="0f841425-d340-4bc4-9220-01a3f5839c4b/cq-main-container/container/container_3/container/cta"  >
                    <a class="ctaprimary ctacenter  " href="#" data-wa-link='getstarted-pricing-cta'>See Plans & Pricing</a>
                </div>
                <div class="ctext">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </Section>
        <div class="ctext">
            <style>
            html, body {
                overflow-x: initial;
            }
            section#main {
                overflow: hidden;
            }
            </style>
        </div>
    </section>
@endsection
@section('scripts')
@parent

@endsection
