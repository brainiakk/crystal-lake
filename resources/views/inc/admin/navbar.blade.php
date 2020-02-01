
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('/admin/create_events') }}" class="brand-logo">
                <span class="logo-abbr">C</span>
                <span class="logo-compact">Crystal Lake</span>
                <span class="brand-title">Crystal Lake</span>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="header-left">
                            <div class="nav-item dropdown search_bar">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <form class="form-inline">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end">

                            <ul class="navbar-nav header-right">
                                <li class="nav-item border-0">
                                <a class="btn btn-secondary create-event-btn" href="{{ url('/admin/create_events') }}" target="_blank">Create Event</a>
                                </li>
                                <li class="nav-item notification_dropdown">
                                    <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-account-circle"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-profile-header">
                                            <img src="images/users/2.jpg" alt="">
                                        <span class="avatar-name ml-2">{{ auth()->user()->name }}</span>
                                    </div>
                                    <a href="{{ route('logout') }}" class="dropdown-item"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="mdi mdi-power"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--**********************************
                Header end
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label">Navigation</li>
                        <li><a href="{{ url('/admin') }}" aria-expanded="false"><i class="mdi mdi-home"></i><span class="nav-text">Dashboard</span></a>
                        </li>

                        <li><a  href="{{ url('/admin/create_events') }}" aria-expanded="false"><i class="mdi mdi-eventbrite"></i><span class="nav-text">Create Events</span></a>
                        </li>
                        <li><a  href="{{ route('logout') }}" aria-expanded="false"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-logout"></i><span class="nav-text">Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--**********************************
                Sidebar end
            ***********************************-->

