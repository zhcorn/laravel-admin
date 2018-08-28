<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-info">
    <!-- Brand Logo -->
    <a href="{{ admin_base_path('/') }}" class="brand-link bg-info">
        {!! config('admin.logo-mini', config('admin.name')) !!}
        <span class="brand-text font-weight-light">{!! config('admin.logo', config('admin.name')) !!}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Admin::user()->avatar }}" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Admin::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @each('admin::partials.menu', Admin::menu(), 'item')
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>