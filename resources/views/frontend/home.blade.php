@extends('frontend.layout')
@section('title','Takecare')

@section('content')

    <div class="hero_area">
        <!-- header section starts -->
        @include('frontend.common.header')
        <!-- end header section -->
        <!-- slider section -->
        @include('frontend.common.page-parts.slider')
        <!-- end slider section -->
    </div>


    <!-- about section -->

    @include('frontend.common.page-parts.about-us')

    <!-- end about section -->

    <!-- book section -->

    @include('frontend.common.page-parts.booking')

    <!-- end book section -->

    <!-- team section -->

    @include('frontend.common.page-parts.our-services')

    <!-- end team section -->

    @include('frontend.common.page-parts.testimonial')
    <!-- client section -->
    <!-- end client section -->

    <!-- contact section -->
    <!-- end contact section -->

    <!-- info section -->
    @include('frontend.common.page-parts.info')
@endsection
