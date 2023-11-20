@extends('front_master')

@push('banner_page')
    <div class="row justify-content-center py-5">
        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated slideInDown">404 Page</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">404 Page</li>
                </ol>
            </nav>
        </div>
    </div>
@endpush

@section('content')
    {{-- @include('partials.about')
    @include('partials.services')
    @include('partials.destination')
    @include('partials.packages')
    @include('partials.process')
    @include('partials.booking')
    @include('partials.team')
    @include('partials.testimonails') --}}
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
