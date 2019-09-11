@extends('front.layouts.front-app')

@section('title')
    {{ config('app.name') }} | About
@endsection

@section('additional-styles')
    <style type="text/css">

        .carousel {
            height: 60%; 
        }
        @media (max-width: 740px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #929FBA !important;
            }
        }
    </style>
@endsection

@section('content')
    
    <!--Carousel Wrapper-->
    <div id="carousel-home" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-home" data-slide-to="1"></li>
            <li data-target="#carousel-home" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="view slides-bg" id="first-slide">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Discover amazing recipes</strong>
                            </h1>
                            <p>
                                <strong>Learn new recipes from all over the world</strong>
                            </p>
                            <p class="mb-4 d-none d-md-block">
                                <strong>
                                    If you are looking for inspiration and want to try new dishes from different places, 
                                    you are at the right place, a community of people who want to share their home recipes.
                                </strong>
                            </p>
                            <a href="{{ route('front.recipes') }}" class="btn btn-outline-white btn-lg">
                                Explore recipes
                                <i class="fas fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                </div>
            </div>
            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item">
                <div class="view slides-bg" id="second-slide">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Share your home recipes</strong>
                            </h1>
                            <p>
                                <strong>Allow the world to see the amazing food that you cook</strong>
                            </p>
                            <p class="mb-4 d-none d-md-block">
                                <strong>
                                    That secret recipe of yours that you think people are missing out on, 
                                    you could share it here on Yum-Yum and see people learn from you and enjoy an amazing dish.
                                </strong>
                            </p>
                            <a href="{{ route('front.register') }}" class="btn btn-outline-white btn-lg">
                                Create an account
                                <i class="fas fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                </div>
            </div>
            <!--/Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="view slides-bg" id="third-slide">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Become your own chef</strong>
                            </h1>
                            <p>
                                <strong>Learn tips and tricks for the kitchen</strong>
                            </p>
                            <p class="mb-4 d-none d-md-block">
                                <strong>
                                    We know that the kitchen is an entire universe on its own, and it is sometimes tricky
                                    to work around all those ingredients and appliances and so much more. Yum-Yum got you!
                                </strong>
                            </p>
                            <a href="{{ route('front.blog') }}" class="btn btn-outline-white btn-lg">
                                Read our blog
                                <i class="fas fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                </div>
            </div>
            <!--/Third slide-->

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->
    
    <!--Main layout-->
    <main>
        <div class="container">
            <section></section>
        </div>
    </main>
    <!--/.Main layout-->
@endsection