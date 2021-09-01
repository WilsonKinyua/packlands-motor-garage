@extends('layouts.homepage')

@section('content')
    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-12 blog-pull-right">
                    <div class="single-service">
                        <h3 class="text-theme-colored">{{ $service->name ?? '' }} </h3>
                        <p>{!! $service->description!!}</p>
                        <h4 class="line-bottom mt-20 mb-20">Price Ksh {{ $service->price ?? '' }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
