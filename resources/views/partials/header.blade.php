<!-- Navbar -->
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-info">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ admin_base_path('/') }}" class="nav-link">Home</a>
        </li>
    </ul>
    {!! Admin::getNavbar()->render('left') !!}
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right user-menu">
                <span class="dropdown-header">{{ trans('admin.setting') }}</span>
                <div class="dropdown-divider"></div>
                <a href="{{ admin_base_path('auth/setting') }}" class="dropdown-item">
                    <i class="fa fa-user mr-2 ml-2"></i> {{ trans('admin.setting') }}
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ admin_base_path('auth/logout') }}" class="dropdown-item">
                    <i class="fa  fa-sign-out mr-2 ml-2"></i> {{ trans('admin.logout') }}
                </a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fa fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->