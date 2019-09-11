@extends('front.layouts.front-app')

@section('title')
    {{ config('app.name') }}
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
            <!--Section: It's all about the recipes -->
            <section class="mt-5 wow fadeIn">
                <h3 class="h3 text-center mb-5">It's all about the recipes</h3>
                <div class="row wow fadeIn">

                    <div class="col-lg-6 col-md-12 px-4">

                    <!--First row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                        <i class="fas fa-code fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                        <h5 class="feature-title">Discover new recipes</h5>
                        <p class="grey-text">
                            If you are looking for inspiration and want to try new dishes from different places, 
                            you are at the right place, a community of people who want to share their home recipes.
                        </p>
                        </div>
                    </div>
                    <!--/First row-->

                    <div style="height:30px"></div>

                    <!--Second row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                        <i class="fas fa-book fa-2x blue-text"></i>
                        </div>
                        <div class="col-10">
                        <h5 class="feature-title">Share your own recipes</h5>
                        <p class="grey-text">
                            That secret recipe of yours that you think people are missing out on, 
                            you could share it here on Yum-Yum and see people learn from you and enjoy an amazing dish.
                        </p>
                        </div>
                    </div>
                    <!--/Second row-->

                    <div style="height:30px"></div>

                    <!--Third row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                        <i class="fas fa-graduation-cap fa-2x cyan-text"></i>
                        </div>
                        <div class="col-10">
                        <h5 class="feature-title">Tips and tricks for the kitchen</h5>
                        <p class="grey-text">
                            We know that the kitchen is an entire universe on its own, and it is sometimes tricky
                            to work around all those ingredients and appliances and so much more. Yum-Yum got you!
                        </p>
                        </div>
                    </div>
                    <!--/Third row-->

                    </div>

                    <div class="col-lg-6 col-md-12">

                    <p class="h5 text-center mb-4">Check this out to get started with cooking</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WEDndTCyGgU" allowfullscreen></iframe>
                    </div>
                    </div>

                </div>
            </section>
            <!--Section: It's all about the recipes -->
    
            <hr class="my-5">

            <!--Section: Discover new recipes -->
            <section class="mt-5 wow fadeIn">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <img src="{{ asset('images/front/index/basil-meal-medium.jpg') }}" class="img-fluid z-depth-1-half"
                            alt="Ingredients on table">
                    </div>
                    <div class="col-md-6 mb-4">
                        <h3 class="h3 mb-3">Discover new recipes</h3>
                        <p>
                            At Yum-Yum, we believe that everyone deserves to try different <strong>food</strong> from different places.
                        </p>
                        <p>
                            If you are looking for inspiration and want to try new dishes from different places, 
                            you are at the right place, a community of people who want to share their home recipes.
                        </p>
                        <hr>
                        <p>
                            <strong>Home cooks from everywhere</strong> share their amazing recipes here. 
                            You can read about them about or even save your <strong>favorite recipes.</strong> 
                        </p>
                        <a href="{{ route('front.recipes') }}" class="btn btn-grey btn-md">
                            See recipes
                            <i class="fas fa-download ml-1"></i>
                        </a>
                        <a href="{{ route('front.register') }}" class="btn btn-grey btn-md">
                            Create account
                            <i class="far fa-image ml-1"></i>
                        </a>
                    </div>

                </div>
            </section>
            <!--Section: Discover new recipes -->

            <hr class="my-5">

            <!--Section: Share your own recipes -->
            <section>
                <h2 class="my-5 h3 text-center">Share your own recipes</h2>
                <div class="row features-small mb-5 mt-3 wow fadeIn">

                    <!--First column-->
                    <div class="col-md-4">
                        <!--First row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Create your recipe</h6>
                                <p class="grey-text">
                                    Create as many recipes as you want in your account and let people experiment with it on their own 
                                    once they've discoevred it.
                                </p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/First row-->

                        <!--Second row-->
                        <div class="row">
                            <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                            <h6 class="feature-title">Provide Ingredients list</h6>
                            <p class="grey-text">
                                What's a recipe without the ingredients needed in order to successfully follow the recipe to the letter.
                            </p>
                            <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/Second row-->

                        <!--Third row-->
                        <div class="row">
                            <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                            <h6 class="feature-title">Provide number of eaters</h6>
                            <p class="grey-text">How many people is it possible to serve after cooking a meal with your recipe.</p>
                            <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/Third row-->
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-4 flex-center">
                    <img src="{{ asset('images/front/index/small-cake.jpg') }}" alt="Piece of cake with a cherry on top"
                        class="z-depth-0 img-fluid">
                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-md-4 mt-2">
                    <!--First row-->
                    <div class="row">
                        <div class="col-2">
                        <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                            <div class="col-10">
                            <h6 class="feature-title">Specify duration</h6>
                            <p class="grey-text">
                                Well people will need to know how long it will take them to prepare a meal or dish using your recipe.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/First row-->

                    <!--Second row-->
                    <div class="row">
                        <div class="col-2">
                        <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Step by step guide</h6>
                            <p class="grey-text">
                                Teach users how to cook with your recipe through clear steps and guidelines to follow. 
                                You wouldn't want them to burn it all, would you?
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Second row-->

                    <!--Third row-->
                    <div class="row">
                        <div class="col-2">
                        <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                        <h6 class="feature-title">Publish your recipe</h6>
                        <p class="grey-text">
                            Once you think you are ready to put your recipe out there for people to try out, just publish it and let people enjoy.
                        </p>
                        <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Third row-->
                    </div>
                    <!--/Third column-->

                </div>
            </section>
            <!--Section: Share your own recipes -->

            <hr class="mb-5">

            <!--Section: Tips and tricks for the kitchen -->
            <section>
                <h2 class="my-5 h3 text-center">Tips and tricks for the kitchen </h2>
                <div class="row features-small mt-5 wow fadeIn">

                    <div class="col-xl-4 col-lg-6">
                        <div class="row">
                            <div class="col-2">
                            <i class="fas fa-level-up-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Insightful articles</h5>
                                <p class="grey-text mt-2">
                                    In our blog, we share some powerful and practical articles about things to do and not to do in
                                    the kitchen as well as how to make the best out of what you possess.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                        <i class="fas fa-comments fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                        <h5 class="feature-title font-bold mb-1">Valuable advice</h5>
                        <p class="grey-text mt-2">
                            We provide valuable advice so that you can be your own chef, experiment as much as you want without 
                            wasting your time and most importantly your ingredients.
                        </p>
                        </div>
                    </div>
                    </div>

                    <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                        <i class="fas fa-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                        <h5 class="feature-title font-bold mb-1">DIY tips</h5>
                        <p class="grey-text mt-2">
                            The kitchen is a whole world on its own, we provide with tips that help you optimize on different 
                            aspects of your kitchen..
                        </p>
                        </div>
                    </div>
                    </div>

                </div>
                <div class="row features-small mt-4 wow fadeIn">

                    <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                        <i class="fas fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                        <h5 class="feature-title font-bold mb-1">Personal experiences</h5>
                        <p class="grey-text mt-2">
                            We also share different experiences that people had in their kitchen when following a certain recipe or
                            just trying out new things.
                        </p>
                        </div>
                    </div>
                    </div>

                    <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                        <i class="fas fa-question fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                        <h5 class="feature-title font-bold mb-1">New perspectives</h5>
                        <p class="grey-text mt-2">
                            We bet you think there is only one way to boil water, well through our blog we will show you that 
                            even the most trivial things can be approached differently in the kitchen.
                        </p>
                        </div>
                    </div>
                    </div>

                    <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                        <i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 mb-2">
                        <h5 class="feature-title font-bold mb-1">Go crazy</h5>
                        <p class="grey-text mt-2">
                            We share very out-of-the-box and adventurous things you could try in your kitchen or as part of your 
                            home cook experience, so look out for fun here.
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!--Section: Tips and tricks for the kitchen -->

        </div>
    </main>
    <!--Main layout-->
@endsection