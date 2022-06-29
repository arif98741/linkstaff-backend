<section class="client_section layout_padding')}}">
    <div class="container">
        <div class="heading_container">
            <h2 class="text-center" style="width: 100%">
                <span>Testimonial</span>
            </h2>
        </div>
    </div>
    <div class="container px-0">
        <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimonials as $key=> $testimonial)
                    <div class="carousel-item @if($key ==0) active @endif">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>
                                        {{ $testimonial->given_by }}
                                    </h5>
                                    <h6>
                                        {{ $testimonial->short_text }}
                                    </h6>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                {{ $testimonial->description }}
                            </p>
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
