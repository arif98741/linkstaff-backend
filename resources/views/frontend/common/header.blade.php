<header class="header_section">
    <div class="header_top">
        <div class="container">
            <div class="contact_nav">
                <a href="tel:+8801827370397">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
           +8801827370397
              </span>
                </a>
                <a href="mailto:hello@takecare.ltd">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
               hello@takecare.ltd
              </span>
                </a>
                <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                House:13, Road:21, Block:C Mirpur-12, Dhaka, 1216
              </span>
                </a>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('frontend/images/takecare-logo.png')}}" alt="">
                </a>


                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/download-app') }}">Download App</a>
                            </li>
                        </ul>
                    </div>
                    <!--                        <div class="quote_btn-container">
                                                <a href="">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                    <span>
                                        Login
                                      </span>
                                                </a>
                                                <a href="">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                    <span>
                                        Sign Up
                                      </span>
                                                </a>
                                                <form class="form-inline">
                                                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>-->
                </div>
            </nav>
        </div>
    </div>
</header>
