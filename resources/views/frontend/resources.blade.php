@extends('frontend.layouts.app')

@section('title', 'Resources')

@section('content')

    <body id="main-body">
        <a id="button"></a>
        <!-- Header start -->

        @include('frontend.layouts.res-header')
        <!-- banner start -->
        <section class="sec_ban" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/resouces.jpg" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2>Resources</h2>
                    <p> The most effective learning system. World’s highest course completion rate.</p>

                </div>
            </div>
        </section>
        <!-- banner end -->
        <!-- tab menu start -->
        <section class="tab-sec menu-left-right resocues-tab desktop-view">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!--  -->
                        <!-- Slider -->

                        {{-- <ul class="slider resocues owl-carousel owl-theme" id="resocues-menu">
						<li><a href="#ps" class="active">Professional Services</a></li>
						<li><a href="#so">Security Operations</a></li>
						<li><a href="#as">Application Security</a></li>
						<li><a href="#ws">Web Security</a></li>
						<li><a href="#vapt">VAPT</a></li>
						<li><a href="#career">career</a></li>
						<li><a href="#ds">Data Science</a></li>
						</ul> --}}

                        <ul class="slider resocues owl-carousel owl-theme" id="resocues-menu">
                            @foreach ($categories as $category)
                                <li><a href="#{{ strtolower(str_replace(' ', '-', $category)) }}">{{ $category }}</a>
                                </li>
                            @endforeach
                        </ul>

                        <!-- control arrows -->
                        <!-- <div class="prev">
						<i class='fa fa-caret-left'></i>
						</div>
						<div class="next">
						<i class='fa fa-caret-right'></i>
         				 </div> -->
                        <!--  -->
                    </div>
                </div>
            </div>

        </section>
        <!-- tab menu end -->
        <section class="resc-sec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">

                        {{-- <div class="wpb_text_column wpb_content_element"> --}}
                            {{-- <div class="wpb_wrapper rbg1 rsp" id="ps">
                                <div class="title-button ">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Professional Services</h3>
                                </div>

                                <div class="carousel-wrap">
                                    <div class="owl-carousel1 owl-carousel owl-theme">
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div id="navigation-count" class="count-nav-box"></div>
                                </div>
                            </div>

                            <div class="wpb_wrapper rbg2 rsp" id="so">
                                <div class="title-button">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Security Operations</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel2 owl-carousel owl-theme">
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div id="navigation-count1" class="count-nav-box"></div>
                                </div>
                            </div>

                            <div class="wpb_wrapper rbg3 rsp" id="as">
                                <div class="title-button">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Application Security</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel3 owl-carousel owl-theme">
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div id="navigation-count2" class="count-nav-box"></div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="wpb_wrapper rbg4 rsp" id="ws">
                                <div class="title-button">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Web Security</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel4 owl-carousel owl-theme">
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div id="navigation-count3" class="count-nav-box"></div>
                                </div>
                            </div>


                            <div class="wpb_wrapper rbg5 rsp" id="vapt">
                                <div class="title-button">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>VAPT</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel5 owl-carousel owl-theme">
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div id="navigation-count4" class="count-nav-box"></div>
                                </div>
                            </div> --}}

                            <!--  -->
                            {{-- <div class="wpb_wrapper rbg6 rsp" id="career">
                                <div class="title-button">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Career</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel6 owl-carousel owl-theme">
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div id="navigation-count5" class="count-nav-box"></div>
                                </div>
                            </div> --}}

                            <!-- data sc start -->
                            {{-- <div class="wpb_wrapper rbg1 rsp" id="ds">
                                <div class="title-button">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Data Science</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel16 owl-carousel owl-theme">
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('resources-view') }}" tabindex="-1">
                                                <div class="card_wrapper">
                                                    <div class="card_img">
                                                        <div class="bottom_strip d-sm-block">
                                                            <span class="text_bottom_strip d-sm-block pull-left">
                                                                <span>ARTICLE</span>
                                                            </span>
                                                            <span class="text_bottom_strip d-sm-block pull-right">
                                                                <span>21 Views </span>
                                                            </span>
                                                        </div>
                                                        <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                            alt="t1">
                                                    </div>
                                                    <div class="card-caption">
                                                        <p class="sub-heading">ZXCSDFS</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div id="navigation-count15" class="count-nav-box"></div>
                                </div>
                            </div> --}}
                            <!-- data sc end  -->
                        {{-- </div> --}}


						<div class="wpb_text_column wpb_content_element">
							@foreach ($categories as $category)
								<div class="wpb_wrapper rsp" id="{{ strtolower(str_replace(' ', '-', $category)) }}">
									<div class="title-button">
										<h3 class="style1"><i class="fa fa-2x fa-file"></i>{{ $category }}</h3>
									</div>
									<div class="carousel-wrap">
										<div class="owl-carousel owl-carousel owl-theme">
											<!-- Add your dynamic items here -->
											<div class="item">
												<a href="{{ route('resources-view') }}" tabindex="-1">
													<div class="card_wrapper">
														<div class="card_img">
															<div class="bottom_strip d-sm-block">
																<span class="text_bottom_strip d-sm-block pull-left"><span>ARTICLE</span></span>
																<span class="text_bottom_strip d-sm-block pull-right"><span>21 Views</span></span>
															</div>
															<img src="assets/images/vapt-services.jpg" class="img-fluid" alt="t1">
														</div>
														<div class="card-caption">
															<p class="sub-heading">ZXCSDFS</p>
														</div>
													</div>
												</a>
											</div>
											<!-- More items can be added dynamically -->
										</div>
									</div>
								</div>
							@endforeach
						</div>

                    </div>


                    <div class="col-sm-3 sider-blog pr-0 left-space tr-spcae" id="tr">
                        <!--search form -->
                        <div class="clearfix mb-4 quick-form1">
                            <div class="form quick-form bg-scheme mb-4 text-center">
                                <p>Search For Your Resources</p>
                                <form name="form_pages" id="form_pages"
                                    action="http://codecnetworks.in/codec/course_resources">
                                    <div id="prefetch-resource">
                                        <!--<input type="text" name="q" id="filter" value="" class="form-control input-lg mr-sm-2 typeahead form-control mb-3" placeholder="Search Resources..." />-->

                                        <input type="text" name="q" id="filter" value=""
                                            class="form-control input-lg mr-sm-2 typeahead form-control mb-3"
                                            placeholder="Search Resources..." />
                                    </div>
                                    <button class="btn btn-success btn-lg btn_save btn_action" data-stype="back"
                                        title="Click to Submit">
                                        <!--<button class="btn btn-success btn-lg btn_save btn_action" type="button"  title="Click to Submit">-->
                                        Search
                                    </button>
                                </form>
                            </div>
                            <script>
                                // 	$(document).ready(function(){
                                // 	  var sample_data = new Bloodhound({
                                // 	   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                                // 	   queryTokenizer: Bloodhound.tokenizers.whitespace,
                                // 	   prefetch:'http://codecnetworks.in/codec/course_resources/fetch_resources',
                                // 	   remote:{
                                // 		url:'http://codecnetworks.in/codec/course_resources/fetch_resources/%QUERY',
                                // 		wildcard:'%QUERY'
                                // 	   }
                                // 	  });

                                // 	  $('#prefetch-resource .typeahead').typeahead(null, {
                                // 	   name: 'sample_data',
                                // 	   display: 'name',
                                // 	   source:sample_data,
                                // 	   limit:5,
                                // 	   templates:{

                                // 	  });
                                // 	});
                            </script>
                        </div>
                        <!-- search form ends -->
                        <div class="resouces-n">
                            <div class="side-head mb-3">
                                <h4>Trending Resources</h4>
                            </div>
                            <div class="over-lay">
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">python</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">WDFSDFDSFSDF</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">What is Agile and Scrum
                                                    Methodology?</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">ZXCSDFS</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">What Is Agile Project
                                                    Management?</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">Geolocations</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">javaa</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">php</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">asdasdasd</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="{{ route('resources-view') }}"><img
                                                src="assets/images/vapt-services.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">Free eBook: Agile and Scrum
                                                    Salary Report</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="entry-wrapper row">
                                    <div class="entry-cover col-sm-4 col-xs-4">
                                        <a href="#"><img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <div class="entry-header">
                                            <p><i class="fa fa-caret-right" aria-hidden="true"
                                                    style="color:green;"></i>&nbsp;
                                                <a href="{{ route('resources-view') }}">richgghh</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <a href="#main-body" class="scrollToTop" style="display: block;"><i class="fa fa-arrow-up"></i></a> --}}

        {{-- @include('frontend.layouts.footer') --}}
        </div>
    </body>

@endsection

@push('scripts')
    <!-- Jquery code -->
    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js?v=1"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>
    <script type="text/javascript">
        //
        $('.menu-left-right ul li a').on('click', function(e) {
            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 120
            }, 100, 'swing', function() {
                window.location.hash = target;
            });
        });
        $(document).ready(function() {
            $('.menu-left-right ul li a').click(function() {
                $('li a').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>

    <script type="text/javascript">
        function addVersionToFiles() {
            var version = new Date().getTime();
            var links = document.getElementsByTagName('link');
            var scripts = document.getElementsByTagName('script');
            // Add version to CSS files
            for (var i = 0; i < links.length; i++) {
                var href = links[i].getAttribute('href');
                if (href && href.endsWith('.css')) {
                    links[i].setAttribute('href', href + '?v=' + version);
                }
            }
            // Add version to script files
            for (var i = 0; i < scripts.length; i++) {
                var src = scripts[i].getAttribute('src');
                if (src) {
                    scripts[i].setAttribute('src', src + '?v=' + version);
                }
            }
        }
        window.onload = function() {
            addVersionToFiles();
        };
    </script>



    <script type="text/javascript">
        $(document).ready(function() {
            function initializeCarousel(carouselClass, navigationCountId) {
                $(carouselClass).owlCarousel({
                    loop: true,
                    margin: 20,
                    dots: true,
                    nav: true,
                    navText: [
                        "<i class='fa fa-angle-left'></i>",
                        "<i class='fa fa-angle-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        }
                    },
                    onInitialized: function(event) {
                        updateNavigationCount(event, navigationCountId);
                    },
                    onChanged: function(event) {
                        updateNavigationCount(event, navigationCountId);
                    }
                });
            }

            function updateNavigationCount(event, navigationCountId) {
                if (!event.namespace) {
                    return;
                }
                var carousel = event.relatedTarget;
                $("#" + navigationCountId).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
                    .length);
            }

            initializeCarousel('.owl-carousel1', "navigation-count");
            initializeCarousel('.owl-carousel2', "navigation-count1");
            initializeCarousel('.owl-carousel3', "navigation-count2");
            initializeCarousel('.owl-carousel4', "navigation-count3");
            initializeCarousel('.owl-carousel5', "navigation-count4");
            initializeCarousel('.owl-carousel6', "navigation-count5");
            initializeCarousel('.owl-carousel16', "navigation-count15");

        });
    </script>
    <script>
        $("#resocues-menu").owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            navText: ["<div class='prev'><i class='fa fa-caret-left'></i></div>",
                "<div class='next'><i class='fa fa-caret-right'></i></div>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                900: {
                    items: 6
                },
                1200: {
                    items: 6
                }
            }


        });
    </script>


    @include('frontend.layouts.right-menu-js')
    <script type="text/javascript">
        $(document).ready(function() {
            "use strict";
            var offSetTop = 100;
            var $scrollToTopButton = $('.scrollToTop');
            //Check to see if the window is top if not then display button
            $(window).scroll(function() {
                if ($(this).scrollTop() > offSetTop) {
                    $scrollToTopButton.fadeIn();
                } else {
                    $scrollToTopButton.fadeOut();
                }
            });
            $scrollToTopButton.click(function() {
                $('.menu-left-right ul li a').removeClass("active");

            });
        });
    </script>
@endpush
