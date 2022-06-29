<section class="team_section layout_padding')}}">
    <div class="container-fluid">
        <div class="heading_container heading_center">
            <h2><span>Our Services</span></h2>
        </div>
        <div class="carousel-wrap ">
            <div class="owl-carousel team_carousel">
                @foreach($front_services  as $key=> $service)

                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset($service->image_path)  }}" alt=""/>
                            </div>
                            <div class="detail-box">
                                <h5> {{ $service->service_name }}</h5>
                                <h6>
                                    Price: {{ $service->price }}
                                </h6>
                                <!--                            <div class="social_box">
                                                                <a href="https://facebook.com/takecare.ltd">
                                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                                </a>

                                                                <a href="https://wa.me/01733499574?text=hey,how we can we call you?">
                                                                    <i class="fa fa-whatsapp" aria-hidden="true"></i> test
                                                                </a>

                                                            </div>-->
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
