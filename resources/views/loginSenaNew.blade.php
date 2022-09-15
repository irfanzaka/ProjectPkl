@extends('layouts.indexNew')

@section('main')
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 4rem 0;">
	    <div class="col-lg-10 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
<div class="loginNew">
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="#">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input">
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>
                    <div class="field button-field">
                        <button>Login</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>
            <div class="line"></div>
            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>
            <div class="media-options">
                <a href="#" class="field google">
                    <img src="/sena/img/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div>
        <!-- Signup Form -->
        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form action="#">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input">
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Create password" class="password">
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Confirm password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field button-field">
                        <button>Signup</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>
            <div class="line"></div>
            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>
            <div class="media-options">
                <a href="#" class="field google">
                    <img src="/sena/img/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div>
    </section>
</div>    
</div>
</div>

    <!-- JavaScript -->
    <script src="sena/js/script.js"></script>

  @endsection