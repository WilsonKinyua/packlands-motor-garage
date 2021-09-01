@extends('layouts.homepage')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('images/bg/bg6.jpg')}}">
        <div class="container pt-90 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">About</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: About -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mt-0 title line-bottom">About us</h2>
                        @foreach ($aboutUsPages as $about)
                        <p>{!! $about->description !!}</p>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <div class="thumb">
                            <a href="https://www.youtube.com/watch?v=kcIuVJiYauA" data-lightbox-gallery="youtube-video"
                                title="Video">
                                <img class="img-fullwidth" src="{{ asset('images/about/8.jpg')}}" alt="images">
                            </a>
                        </div>
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


@endsection
