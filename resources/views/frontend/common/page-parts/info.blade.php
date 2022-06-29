<section class="info_section ">
    <div class="container">

        <div class="info_bottom layout_padding2">
            <div class="row info_main_row">
                <div class="col-md-6 col-lg-3">
                    <h5>
                        Address
                    </h5>
                    <div class="info_contact">

                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                  House:13, Road:21, <br> Block:C Mirpur-12, Dhaka, 1216
                </span>
                        <br>  <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                  +8801827370397
                </span>


                        <br>  <i class="fa fa-envelope"></i>
                            <span>  hello@takecare.ltd  </span>

                    </div>
                    <div class="social_box">
                        <a href="https://facebook.com/takecare.ltd">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://wa.me/+8801827370397&text=hey">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_links">
                        <h5>
                            Useful link
                        </h5>
                        <div class="info_links_menu">

                            <a href="{{ url('/terms-and-conditions-for-provider') }}">
                                Terms & Conditions
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-none">
                    <div class="info_post">
                        <h5>
                            Upcoming
                        </h5>
                        <div class="post_box d-none">
                            <div class="img-box">
                                <img src="{{ asset('frontend/images/post1.jpg')}}" alt="">
                            </div>
                            <p>
                                Normal
                                distribution
                            </p>
                        </div>
                        <div class="post_box d-none">
                            <div class="img-box">
                                <img src="{{ asset('frontend/images/post2.jpg')}}" alt="">
                            </div>
                            <p>
                                Normal
                                distribution
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_post">
                        <h5>
                            Upcoming
                        </h5>
                        <div class="post_box d-none">
                            <div class="img-box">
                                <img src="{{ asset('frontend/images/post3.jpg')}}" alt="">
                            </div>
                            <p>
                                Normal
                                distribution
                            </p>
                        </div>
                        <div class="post_box d-none">
                            <div class="img-box">
                                <img src="{{ asset('frontend/images/post4.png')}}" alt="">
                            </div>
                            <p>
                                Normal
                                distribution
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="displayYear" value="{{ date('Y') }}">
</section>
