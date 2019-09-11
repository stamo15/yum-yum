<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="{{ route('home') }}">
                <strong class="blue-text">Yum-Yum</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{(Route::current()->getName() == 'home') ? 'active' : ''}}">
                        <a class="nav-link waves-effect" href="{{ route('home') }}">
                            Home
                            @if (Route::current()->getName() == 'home')
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item {{ (strpos(Route::current()->getName(), 'admin.recipes') === 0) ? 'active' : '' }}">
                        <a class="nav-link waves-effect" href="{{ route('admin.recipes.dashboard') }}">
                            Recipes
                            @if (strpos(Route::current()->getName(), 'admin.recipes') === 0)
                                <span class="sr-only">(current)</span>    
                            @endif
                        </a>
                    </li>
                    <li class="nav-item {{ (strpos(Route::current()->getName(), 'admin.blog') === 0) ? 'active' : '' }}">
                        <a class="nav-link waves-effect" href="{{ route('admin.blog.dashboard') }}">
                            Blog
                            @if (strpos(Route::current()->getName(), 'admin.blog') === 0)
                                <span class="sr-only">(current)</span>    
                            @endif
                        </a>
                    </li>
                    <li class="nav-item {{ (strpos(Route::current()->getName(), 'admin.users') === 0) ? 'active' : '' }}">
                        <a class="nav-link waves-effect" href="{{ route('admin.users.dashboard') }}">
                            Users
                            @if (strpos(Route::current()->getName(), 'admin.users') === 0)
                                <span class="sr-only">(current)</span>    
                            @endif
                        </a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fas fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    @include('back.admin.layouts.admin-sidebar')
    <!-- Sidebar -->

</header>