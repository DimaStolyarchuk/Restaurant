<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">Admins</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong>John Doe</strong>
                            <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                        </div>
                        <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small">4 min</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small">4 min</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a class="active-menu" href="{{ route('admin_index') }}"><i class="fa fa-dashboard"></i> Головна сторинка(index)</a>
            </li>
            <li>
                <a href="{{ route('admin_about') }}"><i class="fa fa-desktop"></i> Про нас(about)</a>
            </li>
            <li>
                <a href="{{ route('admin_blog') }}"><i class="fa fa-qrcode"></i> Наші контакти(contact)</a>
            </li>

            <li>
                <a href="{{ route('admin_contact') }}"><i class="fa fa-table"></i> Рецепти(recipe)</a>
            </li>
            <li>
                <a href="{{ route('admin_recipe') }}"><i class="fa fa-edit"></i> Блог(blog) </a>
            </li>


            {{--                <li>--}}
            {{--                    <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>--}}
            {{--                    <ul class="nav nav-second-level">--}}
            {{--                        <li>--}}
            {{--                            <a href="#">Second Level Link</a>--}}
            {{--                        </li>--}}
            {{--                        <li>--}}
            {{--                            <a href="#">Second Level Link</a>--}}
            {{--                        </li>--}}
            {{--                        <li>--}}
            {{--                            <a href="#">Second Level Link<span class="fa arrow"></span></a>--}}
            {{--                            <ul class="nav nav-third-level">--}}
            {{--                                <li>--}}
            {{--                                    <a href="#">Third Level Link</a>--}}
            {{--                                </li>--}}
            {{--                                <li>--}}
            {{--                                    <a href="#">Third Level Link</a>--}}
            {{--                                </li>--}}
            {{--                                <li>--}}
            {{--                                    <a href="#">Third Level Link</a>--}}
            {{--                                </li>--}}

            {{--                            </ul>--}}

            {{--                        </li>--}}
            {{--                    </ul>--}}
            {{--                </li>--}}
        </ul>
    </div>

</nav>
