<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item">
                    <a class="sidebar-link "
                       href="{{ url('/') }}" target="_blank"
                       aria-expanded="false"
                    ><i class="mdi mdi-web"></i
                        ><span class="hide-menu">View Homepage</span></a
                    >
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow "
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-view-sequential"></i
                        ><span class="hide-menu">Service Order </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a href="{{ route('backend.order.index') }}" class="sidebar-link"
                            ><i class="mdi mdi-format-list-bulleted"></i
                                ><span class="hide-menu">Order LIst </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-format-list-bulleted"></i
                                ><span class="hide-menu">Pending Order </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-briefcase-check"></i
                                ><span class="hide-menu">Completed Order </span></a
                            >
                        </li>
                    </ul>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow "
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-cash"></i
                        ><span class="hide-menu">Earning </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-format-list-numbers"></i
                                ><span class="hide-menu">Earning List </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-format-list-bulleted"></i
                                ><span class="hide-menu">Pending Earning </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-format-list-bulleted"></i
                                ><span class="hide-menu">Processed Earning </span></a
                            >
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow "
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-briefcase"></i
                        ><span class="hide-menu">On Demand </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('backend.service.create') }}?service_type=short" class="sidebar-link"
                            ><i class="mdi mdi-briefcase-download"></i
                                ><span class="hide-menu">Add Service</span></a
                            >
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ route('backend.service.index') }}?service_type=short" class="sidebar-link"
                            ><i class="mdi mdi-view-list"></i
                                ><span class="hide-menu">Service List </span></a
                            >
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow "
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-briefcase"></i
                        ><span class="hide-menu">Long Service </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a href="{{ route('backend.service.create') }}?service_type=long" class="sidebar-link"
                            ><i class="mdi mdi-briefcase-download"></i
                                ><span class="hide-menu">Add Service (Long)</span></a
                            >
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ route('backend.service.index') }}?service_type=long" class="sidebar-link"
                            ><i class="mdi mdi-view-list"></i
                                ><span class="hide-menu">Service List (long)</span></a
                            >
                        </li>

                    </ul>
                </li>




                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow "
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-briefcase"></i
                        ><span class="hide-menu">Front Service </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('backend.front-service.index') }}" class="sidebar-link"
                            ><i class="mdi mdi-briefcase-download"></i
                                ><span class="hide-menu">Service List</span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('backend.front-service.create') }}" class="sidebar-link"
                            ><i class="mdi mdi-briefcase-download"></i
                                ><span class="hide-menu">Add Service</span></a
                            >
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow "
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-chart-histogram"></i
                        ><span class="hide-menu">Report </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-checkbox-marked"></i
                                ><span class="hide-menu">Service Report </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-checkbox-marked"></i
                                ><span class="hide-menu">Order Report </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-checkbox-marked"></i
                                ><span class="hide-menu">Earning Report </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-checkbox-marked"></i
                                ><span class="hide-menu">User Report </span></a
                            >
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow "
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-account-multiple-outline"></i
                        ><span class="hide-menu">User list </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('backend.user.create') }}" class="sidebar-link"
                            ><i class="mdi mdi-plus"></i
                                ><span class="hide-menu">Add User </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('backend.user.index') }}?role=3" class="sidebar-link"
                            ><i class="mdi mdi-format-list-bulleted"></i
                                ><span class="hide-menu">Provider LIst </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('backend.user.index') }}?role=4" class="sidebar-link"
                            ><i class="mdi mdi-format-list-bulleted"></i
                                ><span class="hide-menu">Customer LIst </span></a
                            >
                        </li>
                    </ul>
                </li>

                {{--                setting start--}}

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark"
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-brightness-7"></i
                        ><span class="hide-menu">Settings </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark"
                               href="javascript:void(0)"
                               aria-expanded="false"
                            ><i class="mdi mdi-brightness-7"></i
                                ><span class="hide-menu">APPWEB </span></a
                            >
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link"
                                    ><i class="mdi mdi-fridge-filled"></i
                                        ><span class="hide-menu">App Settings</span></a
                                    >
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link"
                                    ><i class="mdi mdi-web"></i
                                        ><span class="hide-menu">Web Settings</span></a
                                    >
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link"
                                    ><i class="mdi mdi-database"></i
                                        ><span class="hide-menu">User Logs</span></a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark"
                               href="javascript:void(0)"
                               aria-expanded="false"
                            ><i class="fa fa-list-alt"></i
                                ><span class="hide-menu">Coupon </span></a
                            >
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('backend.coupon.create') }}" class="sidebar-link"
                                    ><i class="mdi mdi-plus"></i
                                        ><span class="hide-menu">Add Coupon </span></a
                                    >
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('backend.coupon.index') }}" class="sidebar-link"
                                    ><i class="mdi mdi-format-list-bulleted"></i
                                        ><span class="hide-menu">Coupon List </span></a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark"
                               href="javascript:void(0)"
                               aria-expanded="false"
                            ><i class="fa fa-list-alt"></i
                                ><span class="hide-menu">Page </span></a
                            >
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link"
                                    ><i class="mdi mdi-plus"></i
                                        ><span class="hide-menu">Add Page </span></a
                                    >
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link"
                                    ><i class="mdi mdi-format-list-bulleted"></i
                                        ><span class="hide-menu">Page List </span></a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark"
                               href="{{ route('backend.expertise.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-check"></i>Expertise </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark"
                               href="{{ route('backend.specialities.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-check"></i>Specialities </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark"
                               href="javascript:void(0)"
                               aria-expanded="false"
                            ><i class="mdi mdi-brightness-7"></i
                                ><span class="hide-menu">Service </span></a
                            >
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('backend.service.service-category.index') }}?service_type=long"
                                       class="sidebar-link"
                                    ><i class="mdi mdi-plus"></i
                                        ><span class="hide-menu">Service Category List (Long)</span></a
                                    >
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('backend.service.service-category.index') }}?service_type=short"
                                       class="sidebar-link"
                                    ><i class="mdi mdi-plus"></i
                                        ><span class="hide-menu">Service Category List (On Demand)</span></a
                                    >
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link"
                                    ><i class="mdi mdi-format-list-bulleted"></i
                                        ><span class="hide-menu">Service Types </span></a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow"
                               href="javascript:void(0)"
                               aria-expanded="false"
                            ><i class="mdi mdi-account-settings-variant"></i
                                ><span class="hide-menu">Role list </span></a
                            >
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link"
                                    ><i class="mdi mdi-plus"></i
                                        ><span class="hide-menu">Add User Role </span></a
                                    >
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link"
                                    ><i class="mdi mdi-format-list-bulleted"></i
                                        ><span class="hide-menu">Role List </span></a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{--                setting end--}}

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow "
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-desktop-mac"></i
                        ><span class="hide-menu">Testimonial </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('backend.testimonial.create') }}" class="sidebar-link"
                            ><i class="mdi mdi-plus"></i
                                ><span class="hide-menu">Add Testimonial </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('backend.testimonial.index') }}" class="sidebar-link"
                            ><i class="mdi mdi-format-list-bulleted"></i
                                ><span class="hide-menu">Testimonial List</span></a
                            >
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow "
                       href="javascript:void(0)"
                       aria-expanded="false"
                    ><i class="mdi mdi-cart"></i
                        ><span class="hide-menu">Cart</span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"
                            ><i class="mdi mdi-format-list-bulleted"></i
                                ><span class="hide-menu">Cart List </span></a
                            >
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark" href="{{ url('logoutlink') }}"><i
                            class="mdi mdi-logout"></i
                        >Logout </a
                    >
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
