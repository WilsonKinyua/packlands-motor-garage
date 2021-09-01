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
                        <h3 class="title text-white">Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Services -->
    <section class="bg-lighter">
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
                                    <a class="btn btn-theme-colored btn-sm btn-flat" href="{{ route('service.details', $service->id) }}">View Service</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg2.jpg"
        data-parallax-ratio="0.7">
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

@endsection
