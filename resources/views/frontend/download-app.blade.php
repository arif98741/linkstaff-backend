@extends('frontend.layout')
@section('title','Takecare')

@section('content')

    <div class="hero_area">
        @include('frontend.common.header')

    </div>


    <div class="container mt-5" style="min-height: 400px">
       <div class="row">
           <div class="col-md-6">
               <img class="img img-fluid"  src="{{ asset('frontend/images/app-promo.png') }}" alt="">
           </div>

           <div class="col-md-6">
               <img  class="img img-fluid" src="{{ asset('frontend/images/app-promo-mobile.jpg') }}" style="height: 50%" alt="">
           </div>
       </div>
    </div>

    @include('frontend.common.page-parts.info')

@endsection
