@extends('front.layouts.front-app')

@section('title')
    {{ config('app.name') }} | Sign in
@endsection

@section('content')
    <main>
        <section class="view h-100" id="register-section">
            <div class="d-flex justify-content-center align-items-center h-100 rgba-stylish-strong">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">
                            <div class="card">
                                <h5 class="card-header unique-color-dark white-text text-center py-4">
                                    <strong>Sign in</strong>
                                </h5>
                    
                                <!--Card content-->
                                <div class="card-body px-lg-5 pt-0">

                                    <!-- Form -->
                                    <form class="text-center" action="{{ route('front.signin') }}" method="POST">
                                
                                        <!-- Email -->
                                        <div class="md-form">
                                        <input type="email" id="materialLoginFormEmail" class="form-control">
                                        <label for="materialLoginFormEmail">E-mail</label>
                                        </div>
                                
                                        <!-- Password -->
                                        <div class="md-form">
                                        <input type="password" id="materialLoginFormPassword" class="form-control">
                                        <label for="materialLoginFormPassword">Password</label>
                                        </div>
                                
                                        <div class="d-flex justify-content-around">
                                        <div>
                                            <!-- Remember me -->
                                            <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- Forgot password -->
                                            <a href="">Forgot password?</a>
                                        </div>
                                        </div>
                                
                                        <!-- Sign in button -->
                                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
                                
                                        <!-- Register -->
                                        <p>Not a member?
                                        <a href="">Register</a>
                                        </p>
                                
                                        <!-- Social login -->
                                        <p>or sign in with:</p>
                                        <a type="button" class="btn-floating btn-fb btn-sm">
                                        <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a type="button" class="btn-floating btn-tw btn-sm">
                                        <i class="fab fa-twitter"></i>
                                        </a>
                                        <a type="button" class="btn-floating btn-li btn-sm">
                                        <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a type="button" class="btn-floating btn-git btn-sm">
                                        <i class="fab fa-github"></i>
                                        </a>
                                
                                    </form>
                                    <!-- Form -->
                                
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection