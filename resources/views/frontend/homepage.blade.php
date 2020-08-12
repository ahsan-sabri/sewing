@extends('layouts.frontend')

@section('content')

    <!--latest-works-->
    <div class="latest-works scrollable" id="works">
        <div class="container">
            <div class="tittle-agileinfo">
                <h3 class="white-w3ls">Latest Works</h3>
            </div>
            <div class="col-md-8 agileits_banner_bottom_grid_three">
                <div class="agileinfo_banner_bottom_grid_three_left">
                    <div class="wthree_banner_bottom_grid_three_left1 grid">
                        <figure class="effect-roxy">
                            <img src="{{ asset('frontend/homepage/images/a2.jpg') }}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>M</span>ending</h3>
                                <p>Vestibulum pulvinar lobortis lorem lectus pretium non.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <p class="w3_agileits_para">Pellentesque vehicula augue eget nisl ullamcorper,
                        molestie blandit ipsum auctor. Mauris volutpat augue dolor.
                    </p>
                </div>
                <div class="agileinfo_banner_bottom_grid_three_left">
                    <p class="w3_agileits_para">Pellentesque vehicula augue eget nisl ullamcorper,
                        molestie blandit ipsum auctor. Mauris volutpat augue dolor.
                    </p>
                    <div class="wthree_banner_bottom_grid_three_left1 grid">
                        <figure class="effect-roxy">
                            <img src="{{ asset('frontend/homepage/images/a3.jpg') }}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>D</span>esigning</h3>
                                <p>Vestibulum pulvinar lobortis lorem lectus pretium non.</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 agileinfo_banner_bottom_grid_three_left bnr-btm3">
                <div class="wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{ asset('frontend/homepage/images/a4.jpg') }}" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><span>A</span>lteration</h3>
                            <p>Vestibulum pulvinar lobortis lorem lectus pretium non.</p>
                        </figcaption>
                    </figure>
                </div>
                <p class="w3_agileits_para">Pellentesque vehicula augue eget nisl ullamcorper,
                    molestie blandit ipsum auctor. Mauris volutpat augue dolor.
                </p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//Latest works-->
    <!-- services -->
    <div class="services scrollable" id="services">
        <div class="container">
            <div class="tittle-agileinfo">
                <h3>Featured Services</h3>
            </div>
            <div class="w3_agileits_services_grids">
                <div class="w3_agileits_services_left">
                    <img src="{{ asset('frontend/homepage/images/services.jpg') }}" alt=""/>
                </div>
                <div class="w3_agileits_services_right">
                    <div class="col-md-6 w3_agileits_services_grid">
                        <div class="w3_agileits_services_grid_agile">
                            <div class="w3_agileits_services_grid_1">
                                <i class="fa fa-female" aria-hidden="true"></i>
                            </div>
                            <h3>Designing</h3>
                            <p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
                        </div>
                    </div>
                    <div class="col-md-6 w3_agileits_services_grid">
                        <div class="w3_agileits_services_grid_agile">
                            <div class="w3_agileits_services_grid_1">
                                <i class="fa fa-scissors" aria-hidden="true"></i>
                            </div>
                            <h3>Alteration</h3>
                            <p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
                        </div>
                    </div>
                    <div class="col-md-6 w3_agileits_services_grid">
                        <div class="w3_agileits_services_grid_agile">
                            <div class="w3_agileits_services_grid_1">
                                <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                            </div>
                            <h3>Sewing</h3>
                            <p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
                        </div>
                    </div>
                    <div class="col-md-6 w3_agileits_services_grid">
                        <div class="w3_agileits_services_grid_agile">
                            <div class="w3_agileits_services_grid_1">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </div>
                            <h3>applique</h3>
                            <p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
                        </div>
                    </div>
                    <div class="col-md-6 w3_agileits_services_grid">
                        <div class="w3_agileits_services_grid_agile">
                            <div class="w3_agileits_services_grid_1">
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            </div>
                            <h3>modernization</h3>
                            <p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
                        </div>
                    </div>
                    <div class="col-md-6 w3_agileits_services_grid">
                        <div class="w3_agileits_services_grid_agile">
                            <div class="w3_agileits_services_grid_1">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                            <h3>Mending</h3>
                            <p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- about -->
    <div class="about-w3layouts" >
        <div class="container">
            <div class="tittle-agileinfo">
                <h3 class="white-w3ls">Some Interesting Facts</h3>
            </div>
            <!-- schedule-bottom -->
            <div class="schedule-bottom">
                <div class="agileits_schedule_bottom_right">
                    <div class="w3ls_schedule_bottom_right_grid">
                        <h3 class="subheading-w3l white-w3ls">
                            Sewing <span>Designs</span> can change how you look at <span>yourself</span>.
                        </h3>
                        <p>Suspendisse varius turpis efficitur erat laoreet dapibus.
                            Mauris sollicitudin scelerisque commodo.
                        </p>
                        <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                            <h4>Customers</h4>
                            <h5 class="counter">792</h5>
                        </div>
                        <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            <h4>Designs</h4>
                            <h5 class="counter">533</h5>
                        </div>
                        <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                            <h4>Awards</h4>
                            <h5 class="counter">95</h5>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //schedule-bottom -->
        </div>
    </div>
    <!-- //about-bottom -->
    {{-- <!-- team -->
    <div class="team scrollable" id="experts">
        <div class="container">
            <div class="tittle-agileinfo">
                <h3>Meet our experts</h3>
            </div>
            <div class="w3ls_banner_bottom_grids">
                <div class="col-md-8 team-agileits-left">
                    <div class="w3_agile_team_grid">
                        <div class="w3layouts_team_grid team1">
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <ul class="agileits_social_list">
                                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="team1-info-w3ls">
                            <h6>Regan Cole</h6>
                            <span>Designer</span>
                            <p>Donec semper rutrum ipsum et bibendum.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3_agile_team_grid">
                        <div class="w3layouts_team_grid team2">
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <ul class="agileits_social_list">
                                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="team2-info-w3ls">
                            <h6>Sydney Taft</h6>
                            <span>Designer</span>
                            <p>Donec semper rutrum ipsum et bibendum.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 team-agileits-right">
                    <div class="w3_agile_team_grid">
                        <div class="w3layouts_team_grid team3">
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <ul class="agileits_social_list">
                                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team3-info-w3ls">
                            <h6>Chris Robinson</h6>
                            <span>Designer</span>
                            <p>Donec semper rutrum ipsum et bibendum.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team --> --}}
    <!-- gallery -->
    <div id="gallery" class="gallery scrollable">
        <div class="tittle-agileinfo">
            <h3>Designs & works</h3>
        </div>
        <div class="w3ls_banner_bottom_grids">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#designs" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Designs</a></li>
                    <li role="presentation"><a href="#Alterations" role="tab" id="Alterations-tab" data-toggle="tab" aria-controls="Alterations">Alterations</a></li>
                    <li role="presentation"><a href="#Mending" role="tab" id="Mending-tab" data-toggle="tab" aria-controls="Mending">Mending</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="designs" aria-labelledby="home-tab">
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g1.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g1.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g2.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g2.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g3.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g3.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g4.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g4.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g5.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g5.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g6.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g6.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g7.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g7.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g8.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g8.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Alterations" aria-labelledby="Alterations-tab">
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g9.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g9.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g10.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g10.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g11.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g11.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g12.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g12.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Mending" aria-labelledby="Mending-tab">
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g8.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g8.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g13.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g13.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g14.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g14.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g15.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g15.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g16.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g16.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 w3layouts_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g17.jpg">
                                <div class="w3layouts_team_grid">
                                    <img src="{{ asset('frontend/homepage/images/g17.jpg') }}" alt=" " class="img-responsive">
                                    <div class="w3layouts_team_grid_pos">
                                        <div class="wthree_text">
                                            <h4>Sewing</h4>
                                            <p>Great look in Outfit</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <div id="about" class="about scrollable">
        <div class="container">
            <div class="tittle-agileinfo">
                <h3>About Us</h3>
            </div>
            <div class="w3ls_banner_bottom_grid1">
                <div class="col-md-6 w3l_banner_bottom_left">
                    <img src="{{ asset('frontend/homepage/images/a1.jpg') }}" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 w3l_banner_bottom_right">
                    <h3 class="subheading-w3l">Welcome to <span>Sewing</span> Designs</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel gravida tortor, molestie venenatis mauris.<br> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec at vestibulum nunc.</p>
                    <ul>
                        <li><i class="fa fa-clone" aria-hidden="true"></i>Designing</li>
                        <li><i class="fa fa-clone" aria-hidden="true"></i>Alteration</li>
                        <li><i class="fa fa-clone" aria-hidden="true"></i>Mending</li>
                        <li><i class="fa fa-clone" aria-hidden="true"></i>applique</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="contact scrollable" id="contact">
        <div class="container">
            <div class="tittle-agileinfo">
                <h3>send us a mail</h3>
            </div>
            <div class="agile-contact-grids">
                <div class="agile-contact-left">
                    <div class="contact-form">
                        <h3 class="white-w3ls subheading-w3l">Contact Form</h3>
                        <form action="#" method="post">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <input type="text" name="Subject" placeholder="Subject" required="">
                            <textarea name="Message" placeholder="Message" required=""></textarea>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                    <div class="address-grid">
                        <h3 class="subheading-w3l">Our Address</h3>
                        <ul class="w3_address">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Location</span><br>Kingsbourne House, 229 High Holborn, London, UK</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i><span>Phone</span><br>+1234 567 567</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><span>Email</span><br><a href="mailto:info@example.com">info@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <h6 class="contact-w3ls">Call <span>001 234 5678</span> to make an appointment</h6>
@endsection
{{-- @section('scripts')
    @parent
@endsection --}}
