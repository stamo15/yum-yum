@extends('front.layouts.front-app')

@section('title')
    {{ config('app.name') }} | Sign up
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
                                    <strong>Sign up</strong>
                                </h5>
                    
                                <!--Card content-->
                                <div class="card-body px-lg-5 pt-0 rgba-stylish-slight">
                    
                                    <!-- Form -->
                                    <form class="text-center" action="{{ route('front.signup') }}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col">
                                                <!-- First name -->
                                                <div class="md-form">
                                                    <input type="text" id="registerFormFirstName" class="form-control" name="first_name" required>
                                                    <label for="registerFormFirstName">First name</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <!-- Last name -->
                                                <div class="md-form">
                                                    <input type="text" id="registerFormLastName" class="form-control" name="last_name" required>
                                                    <label for="registerFormLastName">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <!-- E-mail -->
                                        <div class="md-form mt-0">
                                            <input type="email" id="registerFormEmail" class="form-control" name="email" required>
                                            <label for="registerFormEmail">E-mail</label>
                                        </div>
                    
                                        <!-- Password -->
                                        <div class="md-form">
                                            <input type="password" id="registerFormPassword" class="form-control" 
                                            aria-describedby="registerFormPasswordHelpBlock" required name="password">
                                            <label for="registerFormPassword">Password</label>
                                            <small id="registerFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                                At least 8 characters and 1 digit
                                            </small>
                                        </div>
                    
                                        <!-- Phone number -->
                                        <div class="md-form">
                                            <input type="password" id="registerFormPhone" class="form-control" name="phone"
                                            aria-describedby="registerFormPhoneHelpBlock">
                                            <label for="registerFormPhone">Phone number</label>
                                            <small id="registerFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                                Optional - for two step authentication
                                            </small>
                                        </div>
                    
                                        <!-- Newsletter -->
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="registerFormNewsletter" name="subscribed">
                                            <label class="form-check-label" for="registerFormNewsletter">Subscribe to our newsletter</label>
                                        </div>
                    
                                        <!-- Sign up button -->
                                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign up</button>
                    
                                        <!-- Social register -->
                                        <p>or sign up with:</p>
                    
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
                    
                                        <hr>
                    
                                        <!-- Terms of service -->
                                        <p>By clicking
                                            <em>Sign up</em> you agree to our
                                            <a href="" target="_blank">terms of service</a>
                    
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