<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{"/"}}" class="brand-link">
        <img src="{{asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image ">
                <img class="rounded-circle" src="https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/p200x200/127276256_1330240820660968_9032823244503499320_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=7206a8&_nc_ohc=KTqn6PtY6ecAX9eh-H_&_nc_ht=scontent.fhan3-2.fna&tp=6&oh=c15f6eaf41d4dd28009b660db8c03f6f&oe=60D357F7" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nguyen Van Duc</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href=" {{url("/admin")}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{"/admin/categories"}}" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                           Categories List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{"/admin/brands"}}" class="nav-link">
                        <i class="nav-icon fas fa-copyright"></i>
                        <p>
                            Brands List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{"/admin/products"}}" class="nav-link">
                        <i class="fas nav-icon fa-th-list"></i>                        <p>
                            Products List
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url("/admin/about-us")}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            About Us
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
