<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('index') }}">
                <strong>{{ config('app.name', 'Yum-Yum') }}</strong>
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
                    <li class="nav-item {{(Route::current()->getName() == 'index') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('index') }}">
                            Home 
                            @if (Route::current()->getName() == 'index')
                                <span class="sr-only">(current)</span>
                            @endif
                            
                        </a>
                    </li>
                    <li class="nav-item {{(Route::current()->getName() == 'front.recipes') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('front.recipes') }}">
                            Recipes
                            @if (Route::current()->getName() == 'recipes')
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item {{(Route::current()->getName() == 'front.blog') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('front.blog') }}">
                            Blog
                            @if (Route::current()->getName() == 'blog')
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item {{(Route::current()->getName() == 'front.about') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('front.about') }}">
                            About
                            @if (Route::current()->getName() == 'about')
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item mr-4">
                        <a href="{{ route('front.register') }}" class="nav-link border border-light rounded">
                            <i class="fab fa-github mr-2"></i>Sign up
                        </a>
                    </li>
                    <li class="nav-item mr-4">
                        <a href="{{ route('front.login') }}" class="nav-link border border-light rounded">
                            <i class="fab fa-download mr-2"></i>Sign in
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
</header>
