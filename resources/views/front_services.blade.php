@extends('front_master')

@push('banner_page')
    <div class="row justify-content-center py-5">
        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
@endpush

@section('content')
    {{-- @include('partials.about') --}}
     @include('partials.services')
    {{-- @include('partials.destination')
    @include('partials.packages')
    @include('partials.booking')
    @include('partials.process')
    @include('partials.team') --}}
    @include('partials.testimonails')
@endsection
