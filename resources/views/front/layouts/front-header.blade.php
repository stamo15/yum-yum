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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}">
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.recipes') }}">
                            Recipes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.blog') }}">
                            Blog
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
