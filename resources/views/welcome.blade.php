@extends('layouts.homepage')

@section('content')
    <!-- Section: home -->
    <section id="home">
        <div class="container-fluid p-0">

            <!-- Slider Revolution Start -->
            <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <ul>

                        @foreach ($sliders as $key => $slider)
                            @if ($slider->image)
                                <!-- SLIDERS -->
                                <li data-index="rs-{{ $slider->id }}" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default" data-easeout="default"
                                    data-masterspeed="default" data-thumb="{{ $slider->image->getUrl() }}" data-rotate="0"
                                    data-saveperformance="off" data-title="Slide 1" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ $slider->image->getUrl() }}" alt="" data-bgposition="center center"
                                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                        data-bgparallax="10" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                                        id="rs-{{ $slider->id }}-layer-1" data-x="['left']" data-hoffset="['30']"
                                        data-y="['middle']" data-voffset="['-110']" data-fontsize="['90']"
                                        data-lineheight="['110']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:700;">{{ $slider->caption }}
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                        id="rs-{{ $slider->id }}-layer-2" data-x="['left']" data-hoffset="['35']"
                                        data-y="['middle']" data-voffset="['-25']" data-fontsize="['35']"
                                        data-lineheight="['54']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 7; white-space: nowrap; font-weight:600;">{{ $slider->title }}
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white" id="rs-{{ $slider->id }}-layer-3"
                                        data-x="['left']" data-hoffset="['35']" data-y="['middle']" data-voffset="['35']"
                                        data-fontsize="['16','18',24']" data-lineheight="['28']" data-width="none"
                                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                        {!! $slider->description !!}
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme" id="rs-{{ $slider->id }}-layer-4" data-x="['left']"
                                        data-hoffset="['35']" data-y="['middle']" data-voffset="['100']" data-width="none"
                                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <!-- end .rev_slider -->
            </div>
            <!-- end .rev_slider_wrapper -->
            <script>
                $(document).ready(function(e) {
                    $(".rev_slider").revolution({
                        sliderType: "standard",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 5000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                style: "metis",
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                            }
                        },
                        responsiveLevels: [1240, 1024, 778],
                        visibilityLevels: [1240, 1024, 778],
                        gridwidth: [1170, 1024, 778, 480],
                        gridheight: [650, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            origo: "slidercenter",
                            speed: 1000,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                            type: "scroll"
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                });
            </script>
            <!-- Slider Revolution Ends -->

        </div>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-colored">
        <div class="container pt-0 pb-20">
            <div class="row">
                <div class="call-to-action">
                    <div class="col-md-4">
                        <i
                            class="flaticon-carrepair-tool-6 text-theme-color-2 font-28 pull-left flip sm-pull-none mt-5 mr-20"></i>
                        <h4 class="text-white font-16 font-weight-600">Best Auto Services Company</h4>
                        <h6 class="text-white">Get Your Services Now From Us</h6>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-map-marker text-theme-color-2 font-28 pull-left flip sm-pull-none mt-20 mr-20"></i>
                        <h4 class="text-white font-16 font-weight-600">Find Us Our Location</h4>
                        <h6 class="text-white">{{ trans('panel.location') }}</h6>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-phone text-theme-color-2 font-28 pull-left flip sm-pull-none mt-20 mr-20"></i>
                        <h4 class="text-white font-16 font-weight-600">Contact Us : {{ trans('panel.phone') }}</h4>
                        <h6 class="text-white">You Can Contact Us Anytime</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: About -->
    <section class="___class_+?25___">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <img alt="" src="{{ asset('images/about/about2.jpg') }}" class="img-fullwidth">
                        <h3 class="line-bottom-no-border">Car Repair & Service Center</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates. Iure
                            quam
                            laboriosam ullam omnis nulla deleniti, repellendus sequi reiciendis quas voluptatibus
                            consectetur
                            alias aspernatur deserunt veritatis.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box iconbox-theme-colored p-0 mb-30">
                                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                                        <i class="flaticon-carrepair-transport-6 font-42 text-theme-colored"></i>
                                    </a>
                                    <h4 class="icon-box-title m-0 mb-5">Schedule Services</h4>
                                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                        magni
                                        temporibus voluptates adipisicing..</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box iconbox-theme-colored p-0 mb-30">
                                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                                        <i class="flaticon-carrepair-car-washing-machine font-42 text-theme-colored"></i>
                                    </a>
                                    <h4 class="icon-box-title m-0 mb-5">Best Car Services</h4>
                                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                        magni
                                        temporibus voluptates adipisicing..</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box iconbox-theme-colored p-0 mb-30">
                                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                                        <i class="flaticon-carrepair-car-on-a-frame font-42 text-theme-colored"></i>
                                    </a>
                                    <h4 class="icon-box-title m-0 mb-5">Complete Analysis</h4>
                                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                        magni
                                        temporibus voluptates adipisicing..</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box iconbox-theme-colored p-0 mb-30">
                                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                                        <i class="flaticon-carrepair-transport-4 font-42 text-theme-colored"></i>
                                    </a>
                                    <h4 class="icon-box-title m-0 mb-5">Security inspection</h4>
                                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                        magni
                                        temporibus voluptates adipisicing..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Services -->
    <section class="bg-lighter" id="services">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-uppercase mb-0">Best Carfix &amp; Repair</p>
                        <div class="title-icon">
                            <i class="flaticon-carrepair-tool-6 font-48"></i>
                        </div>
                        <h2 class="text-uppercase text-theme-colored title line-bottom">Our <span
                                class="text-theme-color-2 font-weight-400">Services</span></h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach ($services as $key => $service)
                        <div class="col-md-4 col-sm-6">
                            <div class="feturead mb-30 mb-sm-30">
                                <div class="thumb">
                                    @if ($service->service_photo)
                                        <img src="{{ $service->service_photo->getUrl() }}" class="img-fullwidth">
                                    @endif
                                </div>
                                <div class="bg-white p-20">
                                    <h5 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                        {{ $service->name ?? '' }} <small>(Ksh {{ $service->price ?? '' }})</small>
                                    </h5>
                                    <p>{!! Str::limit($service->description) !!}</p>
                                    <a class="btn btn-theme-colored btn-sm btn-flat"
                                        href="{{ route('service.details', $service->id) }}">View Service</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Features -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row equal-height">
                <div class="col-md-3 bg-img-cover sm-height-auto" data-bg-img="{{ asset('images/bg/bg24.jpg') }}"></div>
                <div class="col-md-3 bg-theme-colored sm-height-auto">
                    <div class="p-50 p-sm-0 p-sm-0 pt-sm-30 pb-sm-30">
                        <h3 class="text-white mb-10 mt-0 line-bottom">Our <span
                                class="text-theme-color-2 font-weight-600">Facilities</span></h3>
                        <ul class="list list-white check font-15">
                            @foreach ($services as $key => $service)
                                <li><a href="#">{{ $service->name ?? '' }}</a></li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn btn-default btn-circled mt-10">View More</a>
                    </div>
                </div>
                <div class="col-md-6 bg-img-cover sm-height-auto" data-bg-img="{{ asset('images/bg/bg25.jpg') }}">
                    <div class="p-50 p-sm-0 p-sm-0 pt-sm-30 pb-sm-30">
                        <!-- Reservation Form Start-->
                        <form name="reservation_form" class="reservation-form" method="post"
                            action="{{ route('create.bookings') }}">
                            @csrf
                            <h3 class="mt-0 line-bottom text-white mb-30">Book A <span
                                    class="text-theme-color-2 font-weight-600">Service Now!</span></h3>
                            <div class="row">
                                <h4 class="text-theme-color-2">Car Information</h4>
                                <div class="col-sm-4">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter Car Name" type="text" id="reservation_name"
                                            name="car_name" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter Car Type" type="text" id="reservation_name"
                                            name="car_type" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter Manufacture Year" type="number" id="reservation_name"
                                            name="car_year" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter car model" type="text" id="reservation_name"
                                            name="car_model" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter no of wheels" type="number" id="reservation_name"
                                            name="number_of_wheels" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-30">
                                        <div class="styled-select">
                                            <select name="type_of_service_id" class="form-control" required>
                                                <option selected disabled>- Select Service -</option>
                                                @foreach ($services as $key => $service)
                                                    <option value="{{ $service->id ?? '1' }}">
                                                        {{ $service->name ?? '' }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-theme-color-2">Your Information</h4>
                                <div class="col-sm-4">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter Name" type="text" id="reservation_name" name="name"
                                            required class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter Phone" type="text" id="reservation_name" name="phone"
                                            required class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter Email" type="email" id="reservation_name" name="email"
                                            required class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter address" type="text" id="reservation_email" name="address"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-30">
                                        <input name="preffered_date_time_of_booking"
                                            class="form-control required date-picker" type="text"
                                            placeholder="Reservation Date" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-30">
                                        <textarea name="message" id="message" rows="5" class="form-control"
                                            placeholder="Message(optional)....."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-0 mt-0">
                                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button type="submit"
                                            class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-color-2-4px">Submit
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Reservation Form End-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Experts -->
    <section id="experts">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-uppercase mb-0">Best Carfix &amp; Repair</p>
                        <div class="title-icon">
                            <i class="flaticon-carrepair-mechanic font-48"></i>
                        </div>
                        <h2 class="text-uppercase text-theme-colored title line-bottom">Our <span
                                class="text-theme-color-2 font-weight-400">Experts</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mtli-row-clearfix">
                <div class="col-md-12">
                    <div class="owl-carousel-4col">
                        @foreach ($experts as $key => $user)
                            <div class="item">
                                <div class="team-members maxwidth400">
                                    <div class="team-thumb">
                                        @if ($user->avatar)
                                            <img class="img-fullwidth" alt="" src="{{ $user->avatar->getUrl() }}">
                                        @endif
                                    </div>
                                    <div
                                        class="team-bottom-part border-bottom-theme-color-2-2px border-1px text-center p-10 pt-20 pb-10">
                                        <h4
                                            class="text-uppercase font-raleway text-theme-color-2 font-weight-600 line-bottom-center m-0">
                                            {{ $user->name ?? '' }}</h4>
                                        <h5 class="mt-0">- {{ $user->professional ?? '' }} -</h5>
                                        <ul class="styled-icons icon-sm icon-dark icon-hover-theme-colored">
                                            <li><a href="{{ $user->facebook ?? '' }}"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="{{ $user->twitter ?? '' }}"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="{{ $user->instagram ?? '' }}"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="{{ $user->skype ?? '' }}"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us & Testimonials -->
    <section class="layer-overlay overlay-white-9" data-bg-img="{{ asset('images/bg/bg6.jpg') }}">
        <div class="container pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h3 class="text-uppercase text-theme-colored title line-bottom line-height-1 mt-0">Why <span
                                class="text-theme-color-2 font-weight-400">Choose Us ?</span></h3>
                        <div id="accordion1" class="panel-group accordion">
                            <div class="panel">
                                <div class="panel-title"> <a class="active" data-parent="#accordion1"
                                        data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span
                                            class="open-sub"></span> Why this Company is
                                        Best?</a> </div>
                                <div id="accordion11" class="panel-collapse collapse in" role="tablist"
                                    aria-expanded="true">
                                    <div class="panel-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae
                                            repellendus
                                            provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser
                                            unt vonsess.
                                            iure poss imusven am aliquam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse"
                                        href="#accordion12" class="___class_+?250___" aria-expanded="true"> <span
                                            class="open-sub"></span> Why this Company is Best?</a>
                                </div>
                                <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                    <div class="panel-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae
                                            repellendus
                                            provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser
                                            unt vonsess.
                                            iure poss imusven am aliquam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse"
                                        href="#accordion13" class="___class_+?256___" aria-expanded="true"> <span
                                            class="open-sub"></span> Why this Company is Best?</a>
                                </div>
                                <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                    <div class="panel-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae
                                            repellendus
                                            provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser
                                            unt vonsess.
                                            iure poss imusven am aliquam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse"
                                        href="#accordion14" class="___class_+?262___" aria-expanded="true"> <span
                                            class="open-sub"></span> Why this Company is Best?</a>
                                </div>
                                <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                    <div class="panel-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae
                                            repellendus
                                            provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser
                                            unt vonsess.
                                            iure poss imusven am aliquam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h3 class="text-uppercase title line-bottom line-height-1 mt-0 mb-30"><i
                                class="fa fa-comments-o text-theme-colored mr-10"></i>What <span
                                class="text-theme-color-2">Clients
                                Say ?</span></h3>
                        <div class="testimonial style1 owl-carousel-1col owl-nav-top">
                            <div class="item">
                                <div class="comment bg-theme-colored">
                                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui
                                        dolorem
                                        facilis.</p>
                                </div>
                                <div class="mt-20">
                                    <div class="thumb pull-right">
                                        <img class="img-circle" alt=""
                                            src="{{ asset('images/testimonials/s2.jpg') }}">
                                    </div>
                                    <div class="patient-details text-right pull-right mr-20 mt-10">
                                        <h5 class="author text-theme-colored">Jonathan Smith</h5>
                                        <h6 class="title">cici inc.</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="comment bg-theme-colored">
                                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui
                                        dolorem
                                        facilis.</p>
                                </div>
                                <div class="mt-20">
                                    <div class="thumb pull-right">
                                        <img class="img-circle" alt=""
                                            src="{{ asset('images/testimonials/s2.jpg') }}">
                                    </div>
                                    <div class="patient-details text-right pull-right mr-20 mt-10">
                                        <h5 class="author text-theme-colored">Jonathan Smith</h5>
                                        <h6 class="title">cici inc.</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="comment bg-theme-colored">
                                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui
                                        dolorem
                                        facilis.</p>
                                </div>
                                <div class="mt-20">
                                    <div class="thumb pull-right">
                                        <img class="img-circle" alt=""
                                            src="{{ asset('images/testimonials/s2.jpg') }}">
                                    </div>
                                    <div class="patient-details text-right pull-right mr-20 mt-10">
                                        <h5 class="author text-theme-colored">Jonathan Smith</h5>
                                        <h6 class="title">cici inc.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9"
        data-bg-img="{{ asset('images/bg/bg2.jpg') }}" data-parallax-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-car mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="754"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase">Vehicles Serviced</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-users mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="675"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase">Happy Clients</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-like2 mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="1248"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase">People Likes</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="24"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase">Awards Won</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: blog -->
    <section id="blog" class="bg-lighter">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-uppercase text-theme-colored title line-bottom line-height-1 mt-0">Latest <span
                                class="text-theme-color-2 font-weight-400">News</span></h3>
                        <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                            @foreach ($blogs as $key => $blog)
                                <div class="item">
                                    <article class="post clearfix maxwidth600 mb-sm-30">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb">
                                                @if ($blog->photo)
                                                    <img src="{{ $blog->photo->getUrl() }}" alt=""
                                                        class="img-responsive img-fullwidth">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="entry-content border-1px p-20 bg-white">
                                            <h5 class="entry-title mt-0 pt-0"><a
                                                    href="{{ route('blog.details', $blog->id) }}">{{ $blog->title ?? '' }}</a>
                                            </h5>
                                            <p class="text-left mb-20 mt-15 font-13">{!! Str::limit($blog->description) !!}</p>
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left"
                                                href="{{ route('blog.details', $blog->id) }}">Read
                                                more</a>
                                            <ul class="list-inline entry-date pull-right font-12 mt-5">
                                                <li><a class="text-theme-colored"
                                                        href="{{ route('blog.details', $blog->id) }}">Admin |</a></li>
                                                <li><span
                                                        class="text-theme-colored">{{ $blog->created_at->diffForHumans() }}</span>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-color-2">
        <div class="container pt-0 pb-20">
            <div class="row">
                <div class="call-to-action">
                    <div class="col-md-12">
                        <h3 class="mt-5 text-white font-weight-600">Workshop The Best Car Servicing & Reparing</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end main-content -->
    </div>
@endsection
