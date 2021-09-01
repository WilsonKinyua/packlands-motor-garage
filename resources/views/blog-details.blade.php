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
                        <h3 class="title text-white text-uppercase">{{ $blog->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    @if ($blog->photo)
                                        <img src="{{ $blog->photo->getUrl() }}" alt=""
                                            class="img-responsive img-fullwidth">
                                    @endif
                                </div>
                            </div>
                            <div class="entry-title pt-10 pl-15">
                                <h4><a class="text-uppercase" href="#">{{ $blog->title ?? '' }}</a></h4>
                            </div>
                            <div class="entry-content mt-10">
                                <p class="mb-15">{!! $blog->description !!}</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
