@extends('layouts.homepage')

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5"
        data-bg-img="{{ asset('images/bg/bg6.jpg') }}">
        <div class="container pt-90 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Gallery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
        <div class="container pt-50 pb-30">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Portfolio Gallery Grid -->
                        <div id="grid" class="gallery-isotope grid-4 gutter clearfix">

                            @foreach ($galleries as $key => $gallery)
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item wheel">
                                    <div class="work-gallery">
                                        <div class="gallery-thumb">
                                            @if ($gallery->image)
                                                <img class="img-fullwidth" alt="" src="{{ $gallery->image->getUrl() }}">
                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-contect">
                                                    <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                        <li><a target="_blank" href="{{ $gallery->image->getUrl() }}"><i
                                                                    class="fa fa-link"></i></a></li>
                                                        <li><a data-rel="prettyPhoto"
                                                                href="{{ $gallery->image->getUrl() }}"><i
                                                                    class="fa fa-arrows"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="gallery-bottom-part text-center">
                                            <h4 class="title text-uppercase font-raleway font-weight-500 m-0">
                                                {{ $gallery->title ?? '' }}</h4>
                                            <h5 class="sub-title m-0">- {{ $gallery->worked_by ?? '' }} -</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->
                            @endforeach

                        </div>
                        <!-- End Portfolio Gallery Grid -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
