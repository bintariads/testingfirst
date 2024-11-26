<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center" style="box-shadow: none;" >


        <nav class="header-nav ms-auto" style="box-shadow: none;">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">

                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" style="margin-right:36px">
                        {{-- <i class="bi bi-bell"></i> --}}
                        <img src="{{ asset('assets/img/notif.png') }}" style="width:28px;" />
                        <span class="badge badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/topbar/uk-flag.png') }}" alt="Profile" class="img-flag"
                            style="width: 36px;height: 22px; top: 24px; left: 862px; gap: 0px; opacity: 0px; margin-right:14px">
                        <span class="menu-lang">English</span>
                        <span class="d-none d-md-block dropdown-toggle ps-2" style="margin-right:14px"></span>

                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Select Language</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <img src="{{ asset('assets/img/topbar/uk-flag.png') }}" alt="Profile" class="img-flag-dropdown">
                                <span class="dropdown-lang">English</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <img src="{{ asset('assets/img/topbar/franch-flag.png') }}" alt="Profile" class="img-flag-dropdown">
                                <span class="dropdown-lang">French</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <img src="{{ asset('assets/img/topbar/spain-flag.png') }}" alt="Profile" class="img-flag-dropdown">
                                <span class="dropdown-lang">Spanish</span>
                            </a>
                        </li>


                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
                <li class="nav-item dropdown pe-3" style="margin-right:30px;">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">

                        {{-- <div class="profile-container"> --}}
                        <div class="profile-info" style="margin-right: 16px">
                            <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle"
                                style="margin-right: 20px">
                            <div class="profile-details">
                                <div class="profile-name">Dani Mu’ti</div>
                                <div class="profile-role">Admin</div>
                            </div>
                        </div>
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>

                        {{-- </div> --}}
                    </a><!-- End Profile Iamge Icon -->
                    {{-- <div class="profile-container">
                <div class="profile-info">
                    <img src="path-to-profile-image.jpg" alt="Profile Picture" class="profile-image">
                    <div class="profile-details">
                        <div class="profile-name">Dani Mu’ti</div>
                        <div class="profile-role">Admin</div>
                    </div>
                </div>
                <button class="dropdown-button">&#9662;</button> <!-- Down arrow symbol -->
            </div> --}}

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
