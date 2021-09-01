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
                        <h3 class="title text-white">Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: News & Blog -->
    <section id="news">
        <div class="container pt-70 pb-40">
            <div class="section-content">
                <div class="row">
                    @foreach ($blogs as $key => $blog)
                        <div class="col-sm-6 col-md-3">
                            <article class="post clearfix mb-30 bg-lighter">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        @if ($blog->photo)
                                            <img src="{{ $blog->photo->getUrl() }}" alt=""
                                                class="img-responsive img-fullwidth">
                                        @endif
                                    </div>
                                </div>
                                <div class="entry-content p-15 pt-10 pb-10">
                                    <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                        <div class="media-body pl-0">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5">
                                                    <a
                                                        href="{{ route('blog.details', $blog->id) }}">{{ $blog->title ?? '' }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-5">{!! Str::limit($blog->description) !!}<a
                                            class="text-theme-color-2 font-12 ml-5"
                                            href="{{ route('blog.details', $blog->id) }}"> View
                                            Details</a>
                                    </p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
